<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']);
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/single-service', [MainController::class, 'singleService'])->name('single-service');
Route::get('/staff', [MainController::class, 'staff'])->name('staff');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/single-post-page', [MainController::class, 'singlePostPage'])->name('single-post-page');
Route::get('/appointment', [MainController::class, 'appointment'])->name('appointment');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
