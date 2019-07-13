<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Book;

class SupplierController extends Controller
{
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
}
