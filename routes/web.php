<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', function () {

    return view('index');
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::post('/contact', [CommentController::class, 'store']);

Route::get('/offers', [RoomController::class, 'offers']);

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/room-details', [RoomController::class, 'show']);

Route::post('/room-details', [RoomController::class, 'store']);

Route::get("/order", [OrderController::class, "index"])->middleware(['auth', 'verified']);
Route::post("/order", [OrderController::class, "store"])->middleware(['auth', 'verified']);
Route::put("/order", [OrderController::class, "update"])->middleware(['auth', 'verified']);
Route::delete("/order", [OrderController::class, "destroy"])->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
