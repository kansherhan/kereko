<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Home route
Route::controller(AppController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});

// Category routers
Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'categories');
    Route::get('/categories', 'categories')->name('categories');
    Route::get('/category/{category:slug}', 'categoryPosts')->name('categoryPosts');
});

// Post routers
Route::controller(PostController::class)->group(function () {
    Route::get('/post', 'allPosts');
    Route::get('/posts', 'allPosts')->name('posts');
    Route::get('/post/{post:slug}', 'post')->name('post');
});

// Authentication routers
Auth::routes([
    'verify' => true
]);

// User routes
Route::name('user.')->controller(UserController::class)->group(function () {
    Route::get('/profile', 'home')->name('home');
    Route::get('/user/{user:username}', 'user')->name('profile');
});

Route::controller(CommentController::class)->name('comment.')->group(function () {
    Route::post('/post/{post:slug}/comment/create', 'create')->name('create');
    Route::get('/post/{postSlug}/comment/{comment:id}/delete', 'delete')->name('delete');
});

Route::get('/search', SearchController::class)->name('search');
