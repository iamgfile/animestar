<?php

namespace App\Http\Controllers;

use App\Product;
use Request;

class Products extends Controller
{

  //get /products or /
  public function index()
  {
		$products = Product::all();
    return view('products.index')->with('products',$products);
  }

  //get /products/new
  public function new()
  {
    return view('products.new');
  }

	//post products/new
	public function create(Request $request)
	{
		Product::create($request->all());
		return redirect('/');
	}

	//get products/1
	public function show($id)
	{
		$product = Product::find($id);
		return view('products.show', compact('product'));	
	}
	//get products/1/edit
	public function edit($id)
	{
		$product = Product::find($id);
		return view('products.edit', compact('product'));
	}

	//post products/1/edit
	public function update($id,Request $request)
	{
	  $product = Product::find($id); 
  	$product->update(Request::all());
		$product->save();
		return redirect('/');
	}

	//delete products/1	
	public function destroy()
	{
		$id.destroy;	
    return redirect ('/');
	}

}
