<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

// Addon category Manage
Route::get('/add-category', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('add-category');
Route::post('/add-category-save', [App\Http\Controllers\CategoryController::class, 'add_category_save'])->name('add-category-save');
Route::get('/view-category', [App\Http\Controllers\CategoryController::class, 'view_category'])->name('view-category');
Route::get('/edit-category/{id}', [App\Http\Controllers\CategoryController::class, 'edit_category'])->name('edit-category');
Route::post('/delete-category', [App\Http\Controllers\CategoryController::class, 'category_delete'])->name('delete-category');

// Addons Manage
Route::get('/add-addons', [App\Http\Controllers\AddonsController::class, 'add_addons'])->name('add-addons');
Route::post('/add-addons-save', [App\Http\Controllers\AddonsController::class, 'add_addons_save'])->name('add-addons-save');
Route::get('/view-addons', [App\Http\Controllers\AddonsController::class, 'view_addons'])->name('view-addons');
Route::get('/edit-addons/{id}', [App\Http\Controllers\AddonsController::class, 'edit_addons'])->name('edit-addons');
Route::post('/delete-addons', [App\Http\Controllers\AddonsController::class, 'addons_delete'])->name('delete-addons');

// Products Manage
Route::get('/add-products', [App\Http\Controllers\ProductsController::class, 'add_products'])->name('add-products');
Route::post('/add-products-save', [App\Http\Controllers\ProductsController::class, 'add_products_save'])->name('add-products-save');
Route::get('/view-products', [App\Http\Controllers\ProductsController::class, 'view_products'])->name('view-products');
Route::get('/edit-products/{id}', [App\Http\Controllers\ProductsController::class, 'edit_products'])->name('edit-products');
Route::post('/delete-products', [App\Http\Controllers\ProductsController::class, 'products_delete'])->name('delete-products');

// Products Addond
Route::get('/addons-products/{id}', [App\Http\Controllers\ProductsController::class, 'addons_products'])->name('addons-products');
Route::post('/add-addons-products-save', [App\Http\Controllers\ProductsController::class, 'add_addons_products_save'])->name('add-addons-products-save');
Route::post('/delete-addons-products', [App\Http\Controllers\ProductsController::class, 'addons_products_delete'])->name('delete-addons-products');
Route::post('/fetch-addons', [App\Http\Controllers\ProductsController::class, 'fetch_addons'])->name('fetch-addons')->middleware('web');

// Website Pages
Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\WebsiteController::class, 'index'])->name('home');
Route::get('/products-details/{id}', [App\Http\Controllers\WebsiteController::class, 'product_details'])->name('product-details');