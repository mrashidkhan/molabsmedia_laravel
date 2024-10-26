<?php

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

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'aboutus'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
// Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/posters', [PageController::class, 'posters'])->name('posters');
Route::get('/upcomingposters', [PageController::class, 'upcomingposters'])->name('upcomingposters');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Services

Route::get('/videoproduction', [ServicesController::class, 'videoproduction'])->name('videoproduction');
Route::get('/events', [ServicesController::class, 'events'])->name('events');
Route::get('/creativewriting', [ServicesController::class, 'creativewriting'])->name('creativewriting');
Route::get('/contentwriting', [ServicesController::class, 'contentwriting'])->name('contentwriting');
Route::get('/webdesign', [ServicesController::class, 'webdesign'])->name('webdesign');
Route::get('/graphicsdesign', [ServicesController::class, 'graphicsdesign'])->name('graphicsdesign');
Route::get('/staffing', [ServicesController::class, 'staffing'])->name('staffing');
