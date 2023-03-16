<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $categories,$products;
    public function listProduct()
    {
        $this->products = Product::orderBy('id','DESC')->get();
        return view('front.product.list-product',[
            'products'=>$this->products,
        ]);
    }
    public function addProduct()
    {
        $this->categories = Category::all();
        return view('front.product.add-product',[
            'categories'=>$this->categories,
        ]);
    }
    public function storeProduct(Request $request)
    {
        Product::createProduct($request);
        return redirect()->back()->with('message','add product save successfully.');
    }
    public function editProduct($id)
    {
        $this->categories = Category::all();
        $this->products = Product::find($id);
        return view('front.product.edit',[
            'categories'=>$this->categories,
            'products' => $this->products,
        ]);
    }
    public function updateProduct(Request $request,$id)
    {
        Product::updateProduct($request,$id);
        return redirect('/list-product')->with('message',' product Update successfully.');

    }
    public function deleteProduct($id)
    {
        $this->products = Product::find($id);
        if (file_exists($this->products->image))
        {
            unlink($this->products->image);
        }
        $this->products->delete();
        return redirect()->back()->with('message',' product Delete successfully.');
    }
}
