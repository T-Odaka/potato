<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagenationController;
use App\Http\Controllers\PotatoController;

Route::get('/contact', [ContactsController::class, 'index']);
Route::post('/contact/confirm', [ContactsController::class, 'confirm']);
Route::post('/contact/complete', [ContactsController::class, 'complete']);
Route::get('/',[PagenationController::class, 'make']);
Route::get('/sortHot', [PagenationController::class, 'sortHot']);
Route::get('/sortSalt', [PagenationController::class, 'sortSalt']);
Route::get('/sortGarlic', [PagenationController::class, 'sortGarlic']);
Route::get('/sortCrispy', [PagenationController::class, 'sortCrispy']);
Route::resource('/potato',PotatoController::class);