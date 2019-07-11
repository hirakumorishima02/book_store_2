<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function account(){
        return view('customer.account');
    }
    
    public function book(){
        return view('customer.book');
    }
    
    public function cart(){
        return view('customer.cart');
    }
    
    public function editAccount(){
        return view('customer.editAccount');
    }
    
    public function paymentComplete(){
        return view('customer.paymentComplete');
    }
    
    public function user(){
        return view('customer.user');
    }
    
    public function category(){
        return view('customer.category');
    }
}
