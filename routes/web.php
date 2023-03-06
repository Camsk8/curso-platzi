<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::controller(PageController::class)->group(function(){ 

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('blog/{post:slug}',[PageController::class,'post'])->name('post');
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('posts', PostController::class)->except(['show']);

require __DIR__.'/auth.php';
