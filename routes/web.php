<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/login_user', [LoginController::class, 'loginUser']);

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', function () {
    return redirect('login');
});

// Route::get('/sign-in', function () {
//     return view('auth.sign-in');
// });

// Route::get('/connectUser', function () {
//     return view('pages.connectedUserTable');
// });

// Route::get('/blockedUser', function () {
//     return view('pages.blockedUserTable');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/connectUser', [App\Http\Controllers\HomeController::class, 'connectUser']);

Route::get('/block_user', [App\Http\Controllers\HomeController::class, 'blockUser']);

Route::get('/un_block_user', [App\Http\Controllers\HomeController::class, 'unBlockUser']);

Route::get('/blockedUser', [App\Http\Controllers\HomeController::class, 'blockedUser']);
