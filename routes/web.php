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

//front page
Route::get('/', function () {return view('welcome');});

Route::get('/pricing', function () {return view('pricing');});

Route::get('/contact_us', function () {return view('contact_us');});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function () {

    // Super admin routes
    Route::prefix('super-admin')
        ->middleware(['super-admin'])
        ->namespace('SuperAdmin')
        ->as('super-admin.')
        ->group(base_path('routes/super-admin.php'));


    // Admin routes
    Route::prefix('admin')
        ->middleware(['role:admin'])
        ->namespace('Admin')
        ->as('admin.')
        ->group(base_path('routes/admin.php'));

    // user routes
    Route::prefix('user')
        ->middleware(['role:employee'])
        ->namespace('Member')
        ->as('user.')
        ->group(base_path('routes/user.php'));

});