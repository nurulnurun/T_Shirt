<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MasterController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProductController;



route::get('/', [MasterController::class, 'master_view'])->name('Backend.Master');

route::get('/brand/list', [BrandController::class, 'Brand_List'])->name('Backend.Brand-List');
route::get('/create/new/brands', [BrandController::class, 'Create_New_Brands'])->name('Backend.Create_New_brands');
Route::post('/brand/store', [BrandController::class, 'brand_store'])->name('brand_store');


route::get('/product/list', [ProductController::class, 'Product_List'])->name('Backend.Product-List');
route::get('/create/new/products', [ProductController::class, 'Create_New_Products'])->name('Backend.Create_New_Products');
route::post('/product/store', [ProductController::class, 'Product_Store'])->name('product.store');

