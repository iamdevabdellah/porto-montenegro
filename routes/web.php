<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\LocalizationController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']); 
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');


Route::get('/admin/lists', [ListController::class, 'index'])->name('admin.lists')->middleware('is_admin');
Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('is_admin');



Route::get('/admin/search', [SearchController::class, 'view'])->name('admin.search');


// localization Route

Route::get("locale/{lange}",[LocalizationController::class,'setLang']);
Route::get("/admin/locale/{lange}",[LocalizationController::class,'setLang']);
Route::get("/admin/locale/{lange}",[LocalizationController::class,'setLang']);
Route::get("/admin/lists/locale/{lange}",[LocalizationController::class,'setLang']);

