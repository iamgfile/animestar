<?php

namespace App\Http\Controllers;

use App\Product;
use Request;

class Products extends Controller
{

    /**
    get /products or /

    @return \Illuminate\Http\Response

    */
    public function index()
    {
        $products = Product::paginate();
        return view('products.index')->with('products',$products);
    }

    /*
    get /products/new

    @return \Illuminate\Http\Response

     */
    public function new()
    {
        return view('products.new');
    }

    /**

    post products/new

    @param \Illuminate\Http\Request	$request

    @return \Illuminate\Http\Response

     */


    public function create(Request $request)
    {
        Product::create(Request::all());
        return redirect('/');
    }

    /**

    get products/1

    @param int $id

    @return \Illuminate\Http\Response

     */

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));	
    }
    /**

    get products/1/edit

    @param int $id

    @return \Illuminate\Http\Response

     */

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**

    post products/1/edit

    @param int $id

    @param \Illuminate\Http\Request $request

    @return \Illuminate\Http\Response

    */
    public function update($id,Request $request)
    {
        Product::find($id)->update(Request::all());
        return redirect('/');
    }

    /**

    delete products/1	

    @param int $id

    @return \Illuminate\Http\Response

    */
    public function destroy($id)
    {
        Product::find($id)->delete();	
        return redirect ('/');
    }
}
