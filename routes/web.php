<?php

use App\Http\Controllers\Admin\AdminNewsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;

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
    return view('index');
})
    ->name('index');

Route::get('/about', function () {
    return view('about');
})
    ->name('about');

Route::group([
    'prefix' => '/news',
    'as' => 'news::'
], function () {

    Route::get('/category', [NewsController::class, 'category'])
        ->name('category');

    Route::get('/category/{category_id}', [NewsController::class, 'newsByCategory'])
        ->name('index')
        ->where('category_id', '\d+');

    Route::get('/item/{id}', [NewsController::class, 'item'])
        ->name('item')
        ->where('id', '\d+');
});

Route::group([
    'prefix' => 'admin/news/create',
    'as' => 'admin::news::'
], function () {

    Route::get('/', [AdminNewsController::class, 'createView'])
        ->name('createView');

    Route::post('/', [AdminNewsController::class, 'create'])
        ->name('create');
});

Route::group([
    'prefix' => '/auth',
    'as' => 'auth::'
], function () {

    Route::get('/', [AuthController::class, 'index'])
        ->name('index');

    Route::post('/signIn', [AuthController::class, 'signIn'])
        ->name('signIn');
});

Route::get('/db', [\App\Http\Controllers\DBController::class, 'index'])
    ->name('db::index');

