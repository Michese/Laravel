<?php

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
    return view('welcome', )
        ->with('isHome', true);
});

Route::get('/about', function () {
    return view('about')
        ->with('isAbout', true);
});

Route::group([
    'prefix' => '/news'
], function() {

    Route::get('/', [NewsController::class, 'index']);

    Route::get('/item/{id}', [NewsController::class, 'item'])
        ->where('id', '\d+');


    Route::group([
        'prefix' => '/add'
    ], function() {

        Route::get('/', function() {
            return view('addNews')
                ->with('isAddNews', true);
        });

        Route::post('/', [NewsController::class, 'addNews']);

    });


});

Route::group([
    'prefix' => '/auth'
], function() {

    Route::get('/', function() {
        return view('auth')
            ->with('isAuth', true);
    });

    Route::post('/', [AuthController::class, 'auth']);
});

