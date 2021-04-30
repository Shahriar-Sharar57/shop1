<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\WebsiteProductController;
use App\Http\Controllers\Website\SubmitController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ManageController;
use App\Http\Controllers\Admin\MainProductCategoryController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContactusController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//website routes start
Route::get('/', [WebsiteController::class, 'index']);
Route::get('contact', [WebsiteController::class, 'contact']);
Route::get('product/category/{slug}', [WebsiteProductController::class, 'category']);
Route::get('product/details/{slug}', [WebsiteProductController::class, 'details']);
Route::post('contact/submit', [SubmitController::class, 'contact']);

//admin panel routes start
Route::get('admin', [AdminController::class, 'index']);

Route::get('admin/user', [UserController::class, 'index']);
Route::get('admin/user/add', [UserController::class, 'add']);
Route::get('admin/user/view/{id}', [UserController::class, 'view']);
Route::post('admin/user/submit', [UserController::class, 'insert']);
Route::get('admin/user/pdf', [UserController::class, 'pdf']);
Route::get('admin/user/excel', [UserController::class, 'excel']);

Route::get('admin/banner', [BannerController::class, 'index']);
Route::get('admin/banner/add', [BannerController::class, 'add']);
Route::get('admin/banner/edit/{slug}', [BannerController::class, 'edit']);
Route::get('admin/banner/view/{slug}', [BannerController::class, 'view']);
Route::post('admin/banner/submit', [BannerController::class, 'insert']);
Route::post('admin/banner/update', [BannerController::class, 'update']);
Route::get('admin/banner/softdelete/{slug}', [BannerController::class, 'softdelete']);

Route::get('admin/manage/basic', [ManageController::class, 'basic']);
Route::post('admin/manage/update/basic', [ManageController::class, 'update_basic']);
Route::get('admin/manage/social', [ManageController::class, 'social']);
Route::post('admin/manage/update/social', [ManageController::class, 'update_social']);
Route::get('admin/manage/contact', [ManageController::class, 'contact']);
Route::post('admin/manage/update/contact', [ManageController::class, 'update_contact']);

Route::get('admin/product/main/category', [MainProductCategoryController::class, 'index']);
Route::get('admin/product/main/category/add', [MainProductCategoryController::class, 'add']);
Route::get('admin/product/main/category/edit/{slug}', [MainProductCategoryController::class, 'edit']);
Route::post('admin/product/main/category/insert', [MainProductCategoryController::class, 'insert']);
Route::post('admin/product/main/category/update', [MainProductCategoryController::class, 'update']);

Route::get('admin/product/category', [ProductCategoryController::class, 'index']);
Route::get('admin/product/category/add', [ProductCategoryController::class, 'add']);
Route::get('admin/product/category/view/{slug}', [ProductCategoryController::class, 'view']);
Route::get('admin/product/category/edit/{slug}', [ProductCategoryController::class, 'edit']);
Route::post('admin/product/category/insert', [ProductCategoryController::class, 'insert']);
Route::post('admin/product/category/update', [ProductCategoryController::class, 'update']);
Route::get('admin/product/category/softdelete/{slug}', [ProductCategoryController::class, 'softdelete']);

Route::get('admin/product', [ProductController::class, 'index']);
Route::get('admin/product/add', [ProductController::class, 'add']);
Route::get('admin/product/view/{slug}', [ProductController::class, 'view']);
Route::get('admin/product/edit/{slug}', [ProductController::class, 'edit']);
Route::post('admin/product/submit', [ProductController::class, 'insert']);
Route::post('admin/product/update', [ProductController::class, 'update']);
Route::post('admin/product/softdelete/{slug}', [ProductController::class, 'softdelete']);

Route::get('admin/contactus', [ContactusController::class, 'index']);
Route::get('admin/contactus/view/{slug}', [ContactusController::class, 'view']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('admin');
})->name('dashboard');
