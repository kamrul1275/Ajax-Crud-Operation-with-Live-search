<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[ProductController::class,'IndexProduct']);

Route::post('/add/product',[ProductController::class,'addProduct'])->name('add.product');


Route::post('/update/product',[ProductController::class,'updateProduct'])->name('update.product');

Route::post('/delete/product',[ProductController::class,'deleteProduct'])->name('delete.product');

Route::get('/paginate/product',[ProductController::class,'paginateProduct']);