<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AboutController,ProductController,ServiceController,BlogController, ContactController};
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

Route::get('/', HomeController::class)->name('home');
Route::get('sobre', AboutController::class)->name('about');
Route::get('produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('produtos/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('servicos', [ServiceController::class, 'index'])->name('services.index');
Route::get('servicos/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('fale-conosco', [ContactController::class, 'index'])->name('contact');
