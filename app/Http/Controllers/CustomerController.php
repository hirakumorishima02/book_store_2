<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Book;
use App\User;
use App\UserInfo;
use App\Order;
use \Cart;
use App\Buyable;
require '../vendor/autoload.php';
use Carbon\Carbon;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class CustomerController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function account(){
        $userInfo = UserInfo::where('user_id','=', Auth::user()->id)->first();
        $user = User::where('id','=', Auth::user()->id)->first();
        return view('customer.account',compact('user','userInfo'));
    }
    
    public function book($id){
        // ビジネスロジックをコントローラーに書く
        $book = Book::find($id);
        if($book->status == 1){
            $status = '非常に良い' ;   
        }else if($book->status == 2){
            $status = '目立った傷なし' ; 
        }else if($book->status == 3){
            $status = '傷あり' ;
        }
        return view('customer.book',compact('book','status'));
    }
    
    public function cart(){
        $carts = Cart::content();
        return view('customer.cart')->with(compact('carts'));
    }
    
    public function editAccount(){
        $userInfo = UserInfo::where('user_id','=', Auth::user()->id)->first();
        $user = User::where('id','=', Auth::user()->id)->first();
        return view('customer.editAccount',compact('user','userInfo'));
    }
    
    public function addAccount(Request $request){
        $userInfo = new UserInfo;
        $userInfo->user_id = Auth::user()->id;
        $userInfo->zip_code = $request->zip_code;
        $userInfo->address = $request->address;
        $userInfo->tel = $request->tel;
        $userInfo->save();
        
        $user = User::where('id','=', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        $userInfo = UserInfo::where('user_id','=', Auth::user()->id)->first();
        $user = User::where('id','=', Auth::user()->id)->first();
        
        return view('customer.account',compact('user','userInfo'));
    }
    
    public function updateAccount(Request $request){
        $userInfo = UserInfo::where('user_id','=', Auth::user()->id)->first();
        $userInfo->zip_code = $request->zip_code;
        $userInfo->address = $request->address;
        $userInfo->tel = $request->tel;
        $userInfo->save();
        
        $user = User::where('id','=', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        return view('customer.account',compact('user','userInfo'));
    }

    
    public function user(){
        $bookList = Book::all();
        $i = mt_rand(0, count($bookList)-1);
        $j = mt_rand(0, count($bookList)-1);
        $k = mt_rand(0, count($bookList)-1);
        $l = mt_rand(0, count($bookList)-1);
        return view('customer.user',compact('bookList','i','j','k','l'));
    }
    
    public function category($id){
        $category = Category::find($id);
        $bookList = Book::where('category_id','=', $id)->get();
        return view('customer.category',compact('category','bookList'));
    }
    
    public function bookToCart($book_id) {
        $book = Book::findOrFail($book_id);
        
        Cart::add([
            [
                'id' => $book->id,
                'name' => $book->title,
                'qty' => '1',
                'price' => $book->price,
                'weight' => '1',
                'options' => ['photo_path'=> $book->photo_path]
                ]
            ]);
        
        $carts = Cart::content();
        return view('customer.cart')->with(compact('carts'));
    }
    
    public function reset() {
        Cart::destroy();
        return redirect('/cart');
    }
    public function remove($rowId) {
        Cart::remove($rowId);
        return redirect('/cart');
    }
    
    public function paymentComplete(Request $request){
    /*単発決済用のコード*/
        try {
            Stripe::setApiKey('sk_test_pVUxs7fuQ3MbjMDt6ZYPtlq100yl4Yjf1i');

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $request->amount,
                'currency' => 'jpy'
            ));

            $dt = new Carbon();
            
            $i = 0;
            foreach($request->id as $val){
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->book_id = $request->id[$i];
            $order->status = '1';
            $order->sales_date = $dt->format('Y-m-d');
            $order->sales_info = $request->row_id[$i];
            $order->save();
            $i++;
            }
            Cart::destroy();
            return view('customer.paymentComplete');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }

    // 以下、本来SupplierControllerにあるもの。エラーが起こるため移植。
    public function orders(){
        return view('supplier.orders');
    }
    
    public function registration(){
        return view('supplier.registration');
    }
    
    public function registrateNewBook(Request $request){
                 $this->validate($request, [
            'photo_path' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横20px 最大縦横500px
                'dimensions:min_width=20,min_height=20,max_width=500,max_height=500',
            ]
        ]);
                if ($request->file('photo_path')->isValid([])) {
        $path = $request->photo_path->store('photo', 's3');
        Storage::disk('s3')->setVisibility($path, 'public');
        $url = Storage::disk('s3')->url($path);
                 $book = new Book;
        $book->category_id = $request->category_id;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->price = $request->price;
        $book->publisher = $request->publisher;
        $book->status = $request->status;
        $book->photo_path = $url;
        $book->save();
         return view('supplier.registration');
                 } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
    
    public function getOrder() {
        $orderList = Order::where('status','=','1');
        return view('supplier.orders',compact('orderList'));
    }
    
       // test
    public function test(){
        return view('test');
    }
}
