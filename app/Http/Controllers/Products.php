<?php

namespace App\Http\Controllers;

use App\Product;

use Request;

use App\Http\Requests\CreateProductRequest;

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

    @param \app\Http\Requests\CreateProductRequest	$request

    @return \Illuminate\Http\Response

     */


    public function create(CreateProductRequest $request)
    {
        if (!empty($request->file('image')))
            {
            $filename = $request->image->store('productimage/', 'public');
            $request->merge(['image_filename' => basename($filename)]);
            }
        else
            {
            $request['image_filename'] = "noimage";
            }
        Product::create($request->all());
        return redirect('/');
    }

    /**

    get products/1

    @param int $id

    @return \Illuminate\Http\Response

     */

    public function show(int $id)
    {
        $product = Product::find($id);
        dd($product);
        return view('products.show', compact('product'));	
    }
    /**

    get products/1/edit

    @param int $id

    @return \Illuminate\Http\Response

     */

    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**

    post products/1/edit

    @param int $id

    @param \app\Http\Requests\CreateProductRequest	$request

    @return \Illuminate\Http\Response

    */
    public function update(int $id,CreateProductRequest $request)
    {
        Product::find($id)->update(Request::all());
        return redirect('/');
    }

    /**

    delete products/1	

    @param int $id

    @return \Illuminate\Http\Response

    */
    public function destroy(int $id)
    {
        Product::find($id)->delete();	
        return redirect ('/');
    }
}
