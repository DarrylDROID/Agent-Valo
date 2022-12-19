<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
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
    return view('home');
})->name("/");

Route::get('/listagent', function () {
    return view('listagent');
});

Route::get('/ourteam', function () {
    return view('ourteam');
});

Route::get('signup', [UserController::class, 'signup'])->name('signup');
Route::post('signup', [UserController::class, 'signup_action'])->name('signup.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::controller(AgentController::class)->group(function () {
    Route::get('/getagent', 'index');
    Route::get('/getagent/{id}', 'show');
});

Route::get('listagent', function () {

    $agent = DB::table('agent')->get();

    return view('listagent', ['agent' => $agent]);
});