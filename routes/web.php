<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotatoListController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagenationController;

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


// Route::get('/', [PotatoListController::class, 'index']);

Route::get('/contact', [ContactsController::class, 'index']);
Route::post('/contact/confirm', [ContactsController::class, 'confirm']);
Route::post('/contact/complete', [ContactsController::class, 'complete']);

Route::get('/',[PagenationController::class, 'make']);
Route::get('/grid',[PagenationController::class, 'gridtest']);