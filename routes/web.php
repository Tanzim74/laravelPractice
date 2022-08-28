<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
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

Route::get('/', function () {
    if (!auth()->user()) {
        return view('welcome');
    }

    if (auth()->user()->role == 1) {
        return redirect()->route('carausel');
    } else {
        return redirect()->route('home');
    }
});

Route::get('/viewBlog', [
    App\Http\Controllers\blogController::class,
    'viewBlog',
])->name('viewBlog');

Route::get('/blogForm', [
    App\Http\Controllers\blogController::class,
    'blogForm',
])->name('blogForm');

Route::get('/readBlog/{id}', [
    App\Http\Controllers\blogController::class,
    'readBlog',
])->name('readBlog');

Route::post('/createForm', [
    App\Http\Controllers\blogController::class,
    'createBlog',
])->name('createBlog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::get('/carausel', [
    App\Http\Controllers\productController::class,
    'carausel',
])
    ->name('carausel')
    ->middleware('auth')
    ->middleware('prevent-back-history');

Route::view('/getView', 'tshirt');
Route::get('/zoom', [productController::class, 'zoom']);

Route::get('/getCategoryWithProducts', [productController::class, 'testCase']);

Route::get('/csv', [productController::class, 'csv']);

Route::get('/map', [productController::class, 'map']);

Route::post('/addcsv', [productController::class, 'upload_csv'])->name('addCSV');

