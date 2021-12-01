<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('layout.post_users');
});

// ini adalah rute untuk tampilan admin
Route::get('/adminHome', function () {
    return view('admin');
});

Route::get('adminForm', function () {
    return view('layout.form_admin');
});

Route::get('adminTable', function () {
    return view('layout.table_admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('adminHome')->group(static function () {
Route::middleware('auth','CekLevelMiddleware:Super Admin, Admin')->group(static function () {
    Route::resource('event', EventController::class);
    });
});

require __DIR__.'/auth.php';