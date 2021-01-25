<?php

use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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
    'as' => 'news::',
    'middleware' => ['checkIsAuth']
], function () {

    Route::get('/category', [NewsController::class, 'category'])
        ->name('category');

    Route::get('/category/{category_id}', [AdminNewsController::class, 'newsByCategory'])
        ->name('index')
        ->where('category_id', '\d+');

    Route::get('/item/{id}', [NewsController::class, 'item'])
        ->name('item')
        ->where('id', '\d+');
});

Route::group([
    'prefix' => 'admin/news',
    'as' => 'admin::news::',
    'middleware' => ['checkIsAuth','checkIsAdmin']
], function () {

    Route::get('/create/', [AdminNewsController::class, 'createView'])
        ->name('createView');

    Route::post('/create/', [AdminNewsController::class, 'create'])
        ->name('create');

    Route::post('/delete/{category_id}', [AdminNewsController::class, 'delete'])
        ->where('category_id', '\d+')
        ->name('delete');
});

Route::group([
    'prefix' => 'admin/users',
    'as' => 'admin::users::',
    'middleware' => ['checkIsAuth','checkIsAdmin']
], function () {

    Route::get('/', [\App\Http\Controllers\Admin\AdminUsersController::class, 'index'])
        ->name('index');

    Route::post('/update', [\App\Http\Controllers\Admin\AdminUsersController::class, 'update'])
        ->name('update');
});

Route::get('/db', [\App\Http\Controllers\DBController::class, 'index'])
    ->name('db::index');

Auth::routes();
Route::group([
    'prefix' => '/auth',
    'as' => 'auth::',
    'middleware' => ['checkIsAuth']
], function () {
    Route::get('/profile', [\App\Http\Controllers\Auth\ProfileController::class, 'profile'])
        ->name('profile');

    Route::post('/profile/update', [\App\Http\Controllers\Auth\ProfileController::class, 'update'] )
        ->name('profile::update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/locale', [\App\Http\Controllers\LocaleController::class, 'setLocale'])->name('locale');
//Route::get('/auth/login/vk', )

Route::group([
    'prefix' => '/social',
   'as' => 'social::',
], function() {
    Route::get('/login/vk', [\App\Http\Controllers\SocialController::class, 'loginVK'])
        ->name('login::vk');

    Route::get('/response/vk', [\App\Http\Controllers\SocialController::class, 'responseVK'])
        ->name('response::vk');

    Route::get('/login/fb', [\App\Http\Controllers\SocialController::class, 'loginFB'])
        ->name('login::fb');

    Route::get('/response/fb', [\App\Http\Controllers\SocialController::class, 'responseFB'])
        ->name('response::fb');
});

Route::get('/api/exchange/rate', [\App\Http\Controllers\ExchangeRateController::class, 'addExchangeRates'])
    ->name('api::exchange::rate');
