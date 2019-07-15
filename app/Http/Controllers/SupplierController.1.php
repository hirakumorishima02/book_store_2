<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Order;
use App\User;

class SupplierController extends Controller
{
    // 以下、本来SupplierControllerにあるもの。エラーが起こるため移植。
    public function orders(){
        $orders = Order::where('status','!=','0')->get();
        $user_id = Auth::user()->id;
        return view('supplier.orders',compact('orders','user_id'));
    }
    
    public function updateOrderStatus(Request $request){
        $i = 0;
        foreach($request->book_id as $id){
        $order = Order::find($id);
        $order->status = $request->status[$i];
        $order->save();
        $i++;
        }
        $orders = Order::where('status','!=','0')->get();
        return view('supplier.orders',compact('orders'));
    }
    
    public function registration(){
        $user_id = Auth::user()->id;
        return view('supplier.registration',compact('user_id'));
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
        
        $user_id = Auth::user()->id;
         return view('supplier.registration',compact('user_id'));
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}
