<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'front'])->name('front');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/team', [WebController::class, 'team'])->name('team');
Route::get('/faq', [WebController::class, 'faq'])->name('faq');
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contactUs');
Route::get('/donations', [WebController::class, 'donate'])->name('donate');
Route::get('/admissions', [WebController::class, 'admissions'])->name('admissions');
Route::get('/our-history', [WebController::class, 'history'])->name('history');
Route::get('/events', [WebController::class, 'admissions'])->name('events');
Route::get('/events/{slug}', [WebController::class, 'eventShow'])->name('events.show');

Route::get('blog', [WebController::class, 'blog'])->name('blog');
Route::get('blog/{slug}', [WebController::class, 'blogShow'])->name('blog.show');
