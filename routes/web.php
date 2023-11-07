<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserLoginController;
use App\Http\Controllers\Backend\MasterController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;


route::get('/admin/login', [UserLoginController::class, 'UserLoginForm'])->name('admin.login');
route::post('/admin/login/post', [UserLoginController::class, 'LoginFormPost'])->name('admin.login.post');

route::group(['middleware'=>'auth'], function(){
    route::get('/', [MasterController::class, 'master_view'])->name('Backend.Master');

    route::get('/brand/list', [BrandController::class, 'Brand_List'])->name('Backend.Brand-List');
    route::get('/create/new/brands', [BrandController::class, 'Create_New_Brands'])->name('Backend.Create_New_brands');
    Route::post('/brand/store', [BrandController::class, 'brand_store'])->name('brand_store');


    route::get('/product/list', [ProductController::class, 'Product_List'])->name('Backend.Product-List');
    route::get('/create/new/products', [ProductController::class, 'Create_New_Products'])->name('Backend.Create_New_Products');
    route::post('/product/store', [ProductController::class, 'Product_Store'])->name('product.store');

    route::get('/category/list', [CategoryController::class, 'Category_List'])->name('Backend.Category-List');
    route::get('/create/new/categories', [CategoryController::class, 'Create_New_Categories'])->name('Backend.Create_New_Category');
    route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');

    route::get('/user/logout',[UserLoginController::class,'logout'])->name('Admin_Logout');

});



