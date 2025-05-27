<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return Inertia::render('HomePage');
});
Route::get('/contact', function () {
return Inertia::render('ContactPage');
});
Route::get('/about', function () {
return Inertia::render('AboutPage');
});
Route::get('/learn-swimming', function () {
return Inertia::render('LearnSwimmingPage');
});
Route::get('/blog', function () {
return Inertia::render('BlogPage');
});
Route::get('/home-foods', function () {
return Inertia::render('HomeFoodsPage');
});
Route::get('/testimonials', function () {
return Inertia::render('TestimonialsPage');
});
