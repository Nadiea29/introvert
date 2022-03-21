<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use App\Models\Test;

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
    return view('start');
});







//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/Managerdashboard', 'App\Http\Controllers\DashboardController@index')->name('Managerdashboard');


});


//order
Route::post('/test',function(Request $request){
    return $request->toArray();
   
})->name('test');
Route::view('/test','test');
Route::post('/test', 'App\Http\Controllers\TestController@test')->name('test');
Route::get('/myorder', 'App\Http\Controllers\TestController@myorder')->name('myorder');
Route::get('/cancel_order/{id}', 'App\Http\Controllers\TestController@cancel_order')->name('cancel_order');






// for users
Route::get('/users', 'App\Http\Controllers\DashboardController@user')->name('users');


//service

Route::get('/service', 'App\Http\Controllers\DashboardController@service')->name('service');

Route::post('/uploadservice', 'App\Http\Controllers\DashboardController@uploadservice')->name('uploadservice');

//developer
Route::get('/developer', 'App\Http\Controllers\DashboardController@developer')->name('developer');
Route::post('/uploaddeveloper', 'App\Http\Controllers\DashboardController@uploaddeveloper')->name('uploaddeveloper');

//showorders
Route::get('/showorders', 'App\Http\Controllers\DashboardController@showorders')->name('showorders');
Route::get('/approved/{id}', 'App\Http\Controllers\DashboardController@approved')->name('approved');

Route::get('/cancel/{id}', 'App\Http\Controllers\DashboardController@cancel')->name('cancel');





//developer_view_orders
Route::get('/vieworder', 'App\Http\Controllers\DashboardController@vieworder')->name('vieworder');
Route::get('/accept/{id}', 'App\Http\Controllers\DashboardController@accept')->name('accept');
Route::get('/working/{id}', 'App\Http\Controllers\DashboardController@working')->name('working');
Route::get('/deliver/{id}', 'App\Http\Controllers\DashboardController@deliver')->name('deliver');



require __DIR__.'/auth.php';
