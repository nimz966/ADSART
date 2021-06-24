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

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('admin/home');
})->name('home');

Route::get('/customers', function () {
    return view('admin/customers');
})->name('customers');

Route::get('/events', function () {
    return view('admin/events');
})->name('events');

Route::get('/event/{id}', function () {
    return view('admin/event-details');
})->name('event');

Route::get('/employees', function () {
    return view('admin/employees');
})->name('employees');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/teams', function () {
    return view('admin/teams');
})->name('teams');

Route::get('/team/{id}', function () {
    return view('admin/team-details');
})->name('team-details');

Route::get('/event/{id}/assignment', function () {
    return view('admin/employee-assignment');
})->name('employee-assignment');

Route::get('/newnotice', function () {
    return view('admin/newnotice');
});
Route::get('/notices', function () {
    return view('admin/notices');
})->name('notices');

Route::get('/changeuserlevel', function () {
    return view('admin/changeuserlevel');
})->name('changeuserlevel');

Route::get('/event-report', function () {
    return view('admin/event-report');
})->name('event-report');

Route::get('/employee-event-report', function () {
    return view('admin/employee-event-report');
})->name('employee-event-report');
