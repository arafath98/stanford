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
