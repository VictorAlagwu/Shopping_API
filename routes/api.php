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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// 
	
	/* Buyer Route */
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index','show']]);

	/* Category Route */
Route::resource('categories', 'Category\CategoryController',['except' => ['create','edit']]);

	/* Product Route */
Route::resource('products', 'Product\ProductController', ['only' => ['index','show']]);

	/* Seller Route */
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index','show']]);

	/* Transaction Route */
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index','show']]);

	/* User Route */
Route::resource('users', 'User\UserController',['except' => ['create','edit']]);

