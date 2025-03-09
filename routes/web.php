<?php





use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/job_details', function () {
    return view('job_details');
})->name('job_details');

Route::get('/job_listings', function () {
    return view('job_listing');    
})->name('job_listings');       


