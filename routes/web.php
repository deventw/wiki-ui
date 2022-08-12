<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;


// Route::get('/',[PageController::class, "search"]);


Route::get('/', function () {
    return view('main');
});

// Route::get('/service',[ServiceController::class, "show"]);

Route::get('/search', function () {
    return view('search');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/create',[ServiceController::class, "create"]);
Route::get('/create', [ServiceController::class, "create"]);

Route::post('/store', [ServiceController::class, "store"]);
Route::post('/update', [ServiceController::class, "update"]);
Route::post('/delete', [ServiceController::class, "delete"]);

Route::get('/index', function () {
    return view("service/index");
});

Route::get('/post_created', function () {
    return view("service/created");
});
Route::get('/post_updated', function () {
    return view('service/updated');
});
Route::get('/post_deleted', function () {
    return view('service/deleted');
});
