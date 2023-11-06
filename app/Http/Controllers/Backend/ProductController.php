<?php

namespace App\Http\Controllers\Backend;


use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product_List()
    {
        $products = Product::paginate(2);
        return view("Backend.Product.Product-List",compact('products'));
    }

    public function Create_New_Products()
    {
        $brands = Brand::all();
        $category = Category::all();
        return view('Backend.Product.create-New-Product', compact('brands', 'category'));
    }

    public function Product_Store(Request $ProductStore)
    {
        //dd($ProductStore->all());

        Product::create([
            'product_id'=>$ProductStore->product_id,
            'product_name'=>$ProductStore->product_name,
            'brand_name'=>$ProductStore->brand_id,
            'category_id'=>$ProductStore->category_id,
            'product_image'=>$ProductStore->product_image,
            'product_price'=>$ProductStore->product_price,
            'product_stock'=>$ProductStore->product_stock,
            'product_status'=>$ProductStore->product_status
        ]);

        return redirect(route('Backend.Product-List'));
    }
}
