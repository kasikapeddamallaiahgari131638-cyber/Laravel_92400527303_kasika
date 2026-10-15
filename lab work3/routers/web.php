<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
});

// About page
Route::get('/about', function () {
    return view('about');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});

// Wildcard route for username
Route::get('/user/{name}', function ($name) {
    return view('user', ['name' => $name]);
});

// Wildcard route for product name
Route::get('/product/{name}', function ($name) {
    return view('product', ['name' => $name]);
});

// Multiple wildcard parameters
Route::get('/category/{category}/product/{id}', function ($category, $id) {
    return view('category', [
        'category' => $category,
        'id' => $id
    ]);
});

// Optional wildcard parameter
Route::get('/page/{title?}', function ($title = 'Welcome') {
    return view('page', ['title' => $title]);
});

// Numeric wildcard parameter
Route::get('/product-id/{id}', function ($id) {
    return 'Product ID: ' . $id;
})->whereNumber('id');