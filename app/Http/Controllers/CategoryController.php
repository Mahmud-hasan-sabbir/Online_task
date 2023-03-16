<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $products,$categories,$category;
    public function dashboard()
    {
        return view('front.home.home');
    }
    public function listCategory()
    {
        $this->category = Category::orderBy('id','DESC')->get();
        return view('front.category.list-category',[
            'category'=>$this->category,
        ]);
    }
    public function addCategory()
    {
        return view('front.category.add-category');
    }
    public function storeCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('message','Category Save Successfully');
    }
    public function editCategory($id)
    {
        $this->categories = Category::find($id);
        return view('front.category.edit',[
            'categories'=> $this->categories,
        ]);
    }
    public function updateCategory(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/list-category')->with('message','Category Update Successfully');
    }
    public function deleteCategory($id)
    {
        $this->category = Category::find($id);
        $this->category->delete();
        return redirect()->back()->with('message','Category Delete Successfully');

    }
}
