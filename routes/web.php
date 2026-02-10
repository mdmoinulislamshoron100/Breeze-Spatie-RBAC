<?php

use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\rbac\PermissionController;
use App\Http\Controllers\rbac\PermissionGroupController;
use App\Http\Controllers\rbac\RoleController;
use App\Http\Controllers\rbac\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/{provider}/redirect', [SocialAuthController::class, 'providerRedirect'])->name('social.redirect');
Route::get('/auth/{provider}/callback', [SocialAuthController::class, 'providerCallback'])->name('social.callback');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'Dashboard'])->name('dashboard');
    Route::resource('/permissions', PermissionController::class)->except(['show']);
    Route::resource('/permission-group', PermissionGroupController::class)->except(['show']);
    Route::resource('/roles', RoleController::class)->except(['show']);
    Route::resource('/users', UserController::class)->except(['show']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::fallback([ErrorController::class,'errorView']);