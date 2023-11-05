<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category_List()
    {
        return view("Backend.Category.Category-List");
    }

    public function Create_New_Categories()
    {
        return view("Backend.Category.Create-New-Category");
    }
}
