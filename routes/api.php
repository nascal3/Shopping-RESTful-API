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
Route::resource('Categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

//Products route
Route::resource('Products', 'Product\ProductController', ['only' => ['index', 'show']]);

//Sellers route
Route::resource('Sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

//Transactions route
Route::resource('Transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);

//Users route
Route::resource('Users', 'User\UserController', ['except' => ['create', 'edit']]);