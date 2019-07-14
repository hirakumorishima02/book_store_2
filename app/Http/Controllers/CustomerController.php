<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\UserInfoRequest;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Book;
use App\User;
use App\UserInfo;
use App\Order;
use \Cart;
use App\Buyable;
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
        $user_id = Auth::user()->id;
        return view('customer.account',compact('user','userInfo','user_id'));
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
        $user_id = Auth::user()->id;
        return view('customer.book',compact('book','status','user_id'));
    }
    
    public function cart(){
        $carts = Cart::content();
        $userInfo = UserInfo::where('user_id','=', Auth::user()->id)->first();
        $user_id = Auth::user()->id;
        return view('customer.cart')->with(compact('carts','userInfo','user_id'));
    }
    
    public function editAccount(){
        $userInfo = UserInfo::where('user_id','=', Auth::user()->id)->first();
        $user = User::where('id','=', Auth::user()->id)->first();
        $user_id = Auth::user()->id;
        return view('customer.editAccount',compact('user','userInfo','user_id'));
    }
    
    public function addAccount(UserInfoRequest $request){
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
        $user_id = Auth::user()->id;
        return view('customer.user',compact('bookList','i','j','k','l','user_id'));
    }
    
    public function category($id){
        $category = Category::find($id);
        $bookList = Book::where('category_id','=', $id)->get();
        $user_id = Auth::user()->id;
        return view('customer.category',compact('category','bookList','user_id'));
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
            $order->userInfo_id = Auth::user()->id;
            $order->save();
            $i++;
            }
            Cart::destroy();
            $user_id = Auth::user()->id;
            return view('customer.paymentComplete',compact('user_id'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }
    
    public function serch(Request $request){
        $user_id = Auth::user()->id;
        $keyword = $request->input('keyword');
        $books = Book::where('title', 'like', '%'.$keyword.'%')->orWhere('author','like','%'.$keyword.'%')->orWhere('publisher','like','%'.$keyword.'%')->get();
        return view ('customer.serch_resault',compact('books','keyword','user_id'));
    }

       // test
    public function test(){
        return view('test');
    }
}
