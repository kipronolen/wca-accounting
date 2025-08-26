<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About Pages
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

// Services Pages
Route::get('/services', function () {
    return view('pages.services.index');
})->name('services');

Route::get('/services/accounting', function () {
    return view('pages.services.accounting');
})->name('services.accounting');

Route::get('/services/tax', function () {
    return view('pages.services.tax');
})->name('services.tax');

Route::get('/services/vat', function () {
    return view('pages.services.vat');
})->name('services.vat');

Route::get('/services/bookkeeping', function () {
    return view('pages.services.bookkeeping');
})->name('services.bookkeeping');

Route::get('/services/payroll', function () {
    return view('pages.services.payroll');
})->name('services.payroll');

Route::get('/services/self-assessment', function () {
    return view('pages.services.self-assessment');
})->name('services.self-assessment');

Route::get('/services/cis', function () {
    return view('pages.services.cis');
})->name('services.cis');

Route::get('/services/company-formation', function () {
    return view('pages.services.company-formation');
})->name('services.company-formation');

Route::get('/services/advisory', function () {
    return view('pages.services.advisory');
})->name('services.advisory');

// Who We Serve Pages
Route::get('/who-we-serve', function () {
    return view('pages.clients.index');
})->name('who-we-serve');

Route::get('/clients/startups', function () {
    return view('pages.clients.startups');
})->name('clients.startups');

Route::get('/clients/freelancers', function () {
    return view('pages.clients.freelancers');
})->name('clients.freelancers');

Route::get('/clients/contractors', function () {
    return view('pages.clients.contractors');
})->name('clients.contractors');

Route::get('/clients/partnerships', function () {
    return view('pages.clients.partnerships');
})->name('clients.partnerships');

Route::get('/clients/sole-traders', function () {
    return view('pages.clients.sole-traders');
})->name('clients.sole-traders');

Route::get('/clients/limited-companies', function () {
    return view('pages.clients.limited-companies');
})->name('clients.limited-companies');

Route::get('/clients/self-employed', function () {
    return view('pages.clients.self-employed');
})->name('clients.self-employed');

// Resources Pages
Route::get('/resources', function () {
    return view('pages.resources.index');
})->name('resources');

Route::get('/calculator/tax', function () {
    return view('pages.calculator.tax');
})->name('calculator.tax');

Route::get('/calculator/currency', function () {
    return view('pages.calculator.currency');
})->name('calculator.currency');

// Blog Pages
Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('blog');

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');