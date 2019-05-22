<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 
public function __construct() {
  $this->middleware('auth');
}
    
    public function index() {
    	$products = Product::orderBy('year', 'ASC')->get();
    	return response()->json($products);
    	
    }

     public function create()
    {
        return View('products');
    }





       public function store(Request $request) {
    	$product = new Product();
    	$product->name = $request->name;
    	$product->year = $request->year;
    	$product->save();

    	return response()->json(['success' =>'The product was created successfully']);
    }
}
