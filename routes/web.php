<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//FRONTEND
Route::get("/", "PageController@showHomePage");

Route::get("/news", "NewsPageController@showNewsPage");

Route::get("/about", "PageController@showAboutPage");

// BACKEND
Route::get("/admin", "AdminPanelController@showAdminPage");

// News
Route::get("/admin/news/create", "NewsController@showCreateNewsPage")->name('admin.news.create');
Route::get("/admin/news/manage", "NewsController@showManageNewsPage")->name('admin.news.manage');

Route::post("/admin/news/save", "NewsController@saveNews")->name('admin.news.save');

Route::get("/admin/news/edit/{id}", "NewsController@showEditNewsPage")->name('admin.news.showEditNewsPage');
Route::post("/admin/news/update", "NewsController@updateEdit")->name('admin.news.updateEdit');

Route::get("/admin/news/delete/{id}", "NewsController@deleteNews")->name('admin.news.delete');


// Brand
Route::get("/admin/brand/create", "BrandController@showCreateBrandPage")->name('admin.brand.create');
Route::get("/admin/brand/manage", "BrandController@showManageBrandPage")->name('admin.brand.manage');

Route::post("/admin/brand/save", "BrandController@saveBrand")->name('admin.brand.save');

Route::get("/admin/brand/edit/{id}", "BrandController@showEditBrandPage")->name('admin.brand.showEditBrandPage');
Route::post("/admin/brand/update", "BrandController@updateEdit")->name('admin.brand.updateEdit');

Route::get("/admin/brand/delete{id}", "BrandController@deleteBrand")->name('admin.brand.delete');

// Product
Route::get("/admin/product/create", "ProductController@showCreateProductPage")->name('admin.product.create');
Route::get("/admin/product/manage", "ProductController@showManageProductPage")->name('admin.product.manage');

Route::post("/admin/product/save", "ProductController@saveProduct")->name('admin.product.save');

Route::get("/admin/product/edit/{id}", "ProductController@showEditProductPage")->name('admin.product.showEditProductPage');
Route::post("/admin/product/update", "ProductController@updateEdit")->name('admin.product.updateEdit');

Route::get("/admin/product/delete{id}", "ProductController@deleteProduct")->name('admin.product.delete');