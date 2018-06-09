<?php

use Illuminate\Support\Facades\Route;

/***
 * Users Routes
 */
Route::resource('users', 'UserController');
Route::get('users/confirm/{id}', function () {
    return view('user.confirm');
})->name('users.confirm');

/***
 * Roles Routes
 */
Route::resource('roles', 'RoleController');
Route::get('roles/confirm/{id}', function () {
    return view('roles.confirm');
})->name('roles.confirm');

/***
 * Posts Routes
 */
Route::resource('posts', 'PostController');
Route::get('posts/confirm/{id}', function () {
    return view('posts.confirm');
})->name('posts.confirm');


/***
 * Categories Routes
 */
Route::resource('categories', 'CategoryController');
Route::get('categories/confirm/{id}', function () {
    return view('categories.confirm');
})->name('categories.confirm');


/***
 * Tags Routes
 */
Route::resource('tags', 'TagController');
Route::get('tags/confirm/{id}', function () {
    return view('tags.confirm');
})->name('tags.confirm');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('posts', 'PostController');
