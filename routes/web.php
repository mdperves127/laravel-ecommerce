<?php

use Illuminate\Support\Facades\Auth;
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

/*
 * Frontend Routes Start
 */
Route::get('/', 'App\Http\Controllers\frontend\FrontendController@index')->name('frontend.index');
/*
 * Frontend Routes Ends
 */




Auth::routes();

/*
 * Resource Routes Start
 */
Route::prefix('admin/dashboard')->middleware('auth')->group(function () {
    Route::resource('/category', 'App\Http\Controllers\dashboard\CategoryController')->names('dashboard.category');
});

/*
 * Resource Routes Ends
 */




 /*
  * Custom Routes Start
*/

Route::prefix('admin/dashboard')->middleware('auth')->group(function () {
    Route::get('/', 'App\Http\Controllers\dashboard\DashboardController@index')->name('dashboard.index');
});


 /*
  * Custom Routes Ends
*/