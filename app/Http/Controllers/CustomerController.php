<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Book;
use App\User;
use App\UserInfo;
use \Cart;
use App\Buyable;

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
    
    public function paymentComplete(){
        return view('customer.paymentComplete');
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
    
    
    // test
    public function test(){
        return view('test');
    }
}
