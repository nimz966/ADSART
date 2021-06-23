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
    return view('welcome');
});
Route::get('/home', function () {
    return view('admin/home');
});
Route::get('/newcustomer', function () {
    return view('admin/newcustomer');
});
Route::get('/viewcustomer', function () {
    return view('admin/viewcustomer');
});
Route::get('/newevent', function () {
    return view('admin/newevent');
});
Route::get('/createdeventdetails', function () {
    return view('admin/createdeventdetails');
});
Route::get('/viewevent', function () {
    return view('admin/viewevent');
});
Route::get('/newemployee', function () {
    return view('admin/newemployee');
});
Route::get('/viewemployee', function () {
    return view('admin/viewemployee');
});
Route::get('/manageteam', function () {
    return view('admin/manageteam');
});
Route::get('/selectpositions', function () {
    return view('admin/selectpositions');
});
Route::get('/assignemployee', function () {
    return view('admin/assignemployee');
});
Route::get('/newnotice', function () {
    return view('admin/newnotice');
});
Route::get('/viewnotice', function () {
    return view('admin/viewnotice');
});
Route::get('/changeuserlevel', function () {
    return view('admin/changeuserlevel');
});
Route::get('/changepassword', function () {
    return view('admin/changepassword');
});
Route::get('/eventreport', function () {
    return view('admin/eventreport');
});
Route::get('/employeeeventreport', function () {
    return view('admin/employeeeventreport');
});