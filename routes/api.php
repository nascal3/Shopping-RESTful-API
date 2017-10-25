<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Buyer route
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);

//Categories route
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

//Products route
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

//Sellers route
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

//Transactions route
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);

//Users route
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);

