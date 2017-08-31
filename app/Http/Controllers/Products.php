<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class Products extends Controller
{

  #get /products or /
  public function index()
  {
    return view('products.index');
  }

  #get /products/new
  public function new()
  {
    return view('products.new');
  }

#post products/new
	public function create(Request $request)
	{
		$product = new Product;
		$product->title = $request->title;
		$product->description = $request->description;
		$product->save();
		return redirect('/');
	}

#get products/1
	public function show($product)
	{
		return view('products.show', compact('product'));	
	}
#get products/1/edit
	public function edit($product)
	{
		return view('products.edit', compact('product'));
	}

#post products/1/edit
	public function update($product,Request $request)
	{
		$product->title = $request->$title;
		$product->save();
		return redirect('/products/$product');
	}

#delete products/1	
	public function destroy()
	{
		$product.destroy;	
    return redirect ('/');
	}

}
