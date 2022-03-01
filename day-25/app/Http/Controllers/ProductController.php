<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $products;


    public function index()
    {
        return view('product.add');
    }
    public function createProduct(Request $request)
    {
        Product::newProduct($request);
        return redirect()->back()->with('message', 'Product Added Successfully');

    }
    public function manage()
    {
        $this->products = Product::orderby('id','desc')->get();
        return view('product.manage-product',['products' => $this->products]);
    }
    public function edit($id)
    {

        $this->product = Product::find($id);
        return view('product.edit-product',['product' => $this->product]);
    }
    public function update(Request $request,$id)
    {

        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product Info Updated Successfully');
    }
    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'Product Info Deleted Successfully');
    }
}
