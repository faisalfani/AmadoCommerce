<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index(){
    	return view('frontend.index');
    }

    public function list(){
    	$products = Product::all();
    	return view('frontend.shop',compact('products'));
    }
}
