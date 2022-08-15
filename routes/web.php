<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }

    return view('welcome');
})->name('welcome');
Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');
Auth::routes();



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('tasks', TaskController::class);

    Route::post('tasks/{task}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::middleware(['can:admin'])->group(function () {
        Route::resource('users', UserController::class);
        // Route::resource('stacks', StackController::class);
    });
});
