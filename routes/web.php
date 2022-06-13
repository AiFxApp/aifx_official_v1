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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('admin/profile/user', function() {
    return view('profile.user');
})->name('user-profile')->middleware('auth');

Route::get('admin/profile/update', function() {
    return view('profile.profile');
})->name('profile-update')->middleware('auth');

Route::get('admin/kanban', function() {
    return view('dashboard.kanban');
})->name('kanban')->middleware('auth');