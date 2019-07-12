<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        $i = 0;
        foreach($request->num as $val){
        $book = new Book;
        $book->category_id = $request->category_id[$i];
        $book->title = $request->title[$i];
        $book->author = $request->author[$i];
        $book->isbn = $request->isbn[$i];
        $book->price = $request->price[$i];
        $book->publisher = $request->publisher[$i];
        $book->status = $request->status[$i];
        $book->photo_path = $request->photo_path[$i];
        $book->save();
        $i++;
        }

        return view('supplier.registration');
    }
}
