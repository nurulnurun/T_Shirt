<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Category_List()
    {
        $category = Category::paginate(2);
        return view("Backend.Category.Category-List", compact('category'));
    }

    public function Create_New_Categories()
    {
        return view("Backend.Category.Create-New-Category");
    }

    public function category_store(Request $CategoryStore)
    {
        //dd($CategoryStore->all());

        Category::create([
            'category_id'=>$CategoryStore->category_id,
            'category_name'=>$CategoryStore->category_name,
            'category_description'=>$CategoryStore->category_description
        ]);

        return redirect(route('Backend.Category-List'));
    }
}
