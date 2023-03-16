<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $products,$image,$imageName,$imageUrl,$directory,$product;


    public static function uploadImage($request,$product= null)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            if ($product)
            {
                if (file_exists($product->image))
                {
                    unlink($product->image);
                }
            }
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'admin/assets/uploades-file/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        }else{
            if ($product)
            {
                self::$imageUrl = $product->image;
            }else{
                self::$imageUrl = null;
            }

        }

        return self::$imageUrl;
    }
    public static function createProduct($request)
    {
        self::$products                  = new Product();
        self::$products->category_id     = $request->category_id;
        self::$products->name            = $request->name;
        self::$products->image           = self::uploadImage($request);
        self::$products->save();
    }
    public static function updateProduct($request,$id)
    {
        self::$product                   = Product::find($id);
        self::$product->category_id     = $request->category_id;
        self::$product->name            = $request->name;
        self::$product->image           = self::uploadImage($request,self::$product);
        self::$product->save();
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

}
