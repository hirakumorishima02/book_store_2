<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function orders(){
        return view('supplier.orders');
    }
    
    public function registration(){
        return view('supplier.registration');
    }
}
