<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function mainview()
    {
        $category = Category::orderBy('id','DESC')->get();
        $products = Product::orderBy('id','DESC')->get();
        return view('user_view.home.home',compact('category','products'));
    }
}
