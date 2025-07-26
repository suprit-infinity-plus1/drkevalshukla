<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/minimally-invasive-spine-surgeries', [MainController::class, 'minimallyInvasiveSpineSurgeries'])->name('minimally-invasive-spine-surgeries');
Route::get('/neuro-oncology', [MainController::class, 'neuroOncology'])->name('neuro-oncology');
Route::get('/neuro-trauma', [MainController::class, 'neuroTrauma'])->name('neuro-trauma');
Route::get('/vascular-neurosurgery', [MainController::class, 'vascularNeurosurgery'])->name('vascular-neurosurgery');
Route::get('/epilepsy-surgery', [MainController::class, 'epilepsySurgery'])->name('epilepsy-surgery');
Route::get('/endoscopic-skull-base-surgery', [MainController::class, 'endoscopicSkullBaseSurgery'])->name('endoscopic-skull-base-surgery');



Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {

        Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/profile2/edit', [AdminController::class, 'profileEdit'])->name('admin.profileEdit');
    });
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';
