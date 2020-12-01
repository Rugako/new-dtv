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
