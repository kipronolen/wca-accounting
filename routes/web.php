<?php

use Illuminate\Support\Facades\Route;

// Home
Route::view('/', 'pages.home')->name('home');

// About
Route::view('/about', 'pages.about')->name('about');


// Services
Route::view('/services', 'pages.services.index')->name('services');
Route::view('/services/accounting', 'pages.services.accounting')->name('services.accounting');
Route::view('/services/tax', 'pages.services.tax')->name('services.tax');
Route::view('/services/vat', 'pages.services.vat')->name('services.vat');
Route::view('/services/bookkeeping', 'pages.services.bookkeeping')->name('services.bookkeeping');
Route::view('/services/payroll', 'pages.services.payroll')->name('services.payroll');
Route::view('/services/self-assessment', 'pages.services.self-assessment')->name('services.self-assessment');
Route::view('/services/cis', 'pages.services.cis')->name('services.cis');
Route::view('/services/company-formation', 'pages.services.company-formation')->name('services.company-formation');
Route::view('/services/advisory', 'pages.services.advisory')->name('services.advisory');

// Who we serve
Route::view('/who-we-serve', 'pages.clients.index')->name('who-we-serve');
Route::view('/clients/startups', 'pages.clients.startups')->name('clients.startups');
Route::view('/clients/freelancers', 'pages.clients.freelancers')->name('clients.freelancers');
Route::view('/clients/contractors', 'pages.clients.contractors')->name('clients.contractors');
Route::view('/clients/partnerships', 'pages.clients.partnerships')->name('clients.partnerships');
Route::view('/clients/sole-traders', 'pages.clients.sole-traders')->name('clients.sole-traders');
Route::view('/clients/limited-companies', 'pages.clients.limited-companies')->name('clients.limited-companies');
Route::view('/clients/self-employed', 'pages.clients.self-employed')->name('clients.self-employed');

//Clients


// Resources and calculators
Route::view('/resources', 'pages.resources.index')->name('resources');
Route::view('/calculator/tax', 'pages.calculator.tax')->name('calculator.tax');
Route::view('/calculator/currency', 'pages.calculator.currency')->name('calculator.currency');

// Blog
Route::view('/blog', 'pages.blog.index')->name('blog');

// Contact
Route::view('/contact', 'pages.contact')->name('contact');

// In routes/web.php
use App\Http\Controllers\CurrencyController; // Import the controller

Route::post('/currency/convert', [CurrencyController::class, 'convert'])->name('currency.convert');
