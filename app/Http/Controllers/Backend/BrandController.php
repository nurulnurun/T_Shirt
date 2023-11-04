<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function Brand_List()
    {
        notify()->success('Successfully Create Form ⚡️');
        $brands = Brand::paginate(2);
        return view('Backend.Brand.Brand-List', compact('brands'));
    }

    public function Create_New_Brands()
    {
        return view('Backend.Brand.Create-New-Brand');
    }

    public function brand_store(Request $BrandStore)
    {
        //dd($BrandStore->all());

        Brand::create([
            'brand_id'=>$BrandStore->brand_id,
            'brand_name'=>$BrandStore->brand_name,
            'brand_status'=>$BrandStore->brand_status,
            'upload_image'=>$BrandStore->upload_image,
            'brand_short_description'=>$BrandStore->brand_short_description,
        ]);

        return redirect(route('Backend.Brand-List'));

    }
}
