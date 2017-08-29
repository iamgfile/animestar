<?php

namespace App\Http\Controllers;

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
#incomplete!! no description
	public function create(Request $request)
	{
		$product = new Product();
		$product->title = $request->title;
		$product->save();
		return redirect('/');
	}

#get products/1
	public function show(Product $product)
	{
		return view('products.show', compact('product'));	
	}
#get products/1/edit
	public function edit(Product $product)
	{
		return view('products.edit', compact('product'));
	}

#post products/1/edit
	public function update(Product $product,Request $request)
	{
		$product->title = $request->$title;
		$product->save();
		return redirect
	}

#delete products/1	
	public function destroy()
	{
		$product.destroy	
		return redirect('/');
	}

}
