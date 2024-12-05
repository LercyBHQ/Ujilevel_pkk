<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CartController;

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

Route::get('/',[FrontendController::class, 'rosan'])->name('rosan');
Route::get('/about',[FrontendController::class, 'about'])->name('about');
Route::get('/product',[FrontendController::class, 'product'])->name('product');
Route::post('/', function (App\Http\Requests\PostRequest $request) {

    return back()->with('success','Data Added Successfully.');
    });
Route::resource('posts', PostController::class);
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
