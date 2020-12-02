<?php

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
    return view('welcome');
});
Route::get('/over-DTV', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//admin
Route::get('/adminbaan', [App\Http\Controllers\BaanController::class, 'index'])->name('adminbaans');
Route::get('/adminbaan-create', [App\Http\Controllers\BaanController::class, 'indexCreate'])->name('createbaan');
Route::get('/adminbaan-create', [App\Http\Controllers\BaanController::class, 'CREATE'])->name('createpostbaan');

Route::get('/admin', function () {
    return view('Backend.AdminIndex');
});
Route::get('/adminlogin', function () {
    return view('Backend.AdminLogin');

});Route::get('/usermanage', function () {
    return view('Backend.AdminUserManage');

});Route::get('/pref', function () {
    return view('Backend.preferences');
});
