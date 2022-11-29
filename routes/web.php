<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutusController;
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

Route::get('/',[PagesController::class, 'home'])->name('home');

Route::get('add-blog-post-form', [PostController::class, 'index'])->middleware('auth');
Route::post('store-form', [PostController::class, 'store'])->middleware('auth');

Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact_form',[ContactController::class, 'contact_form']);

Route::get('aboutus',[AboutusController::class, 'aboutus'])->name('aboutus');

Route::get('/events', [PagesController::class, 'events'])->name('events');



require __DIR__.'/auth.php';
