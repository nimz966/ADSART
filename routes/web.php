<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\userAuth;

// views

/*Route::get('/login', function () {
    return view('login');
});*/

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('admin/home');
})->name('home');

Route::get('/customers', function () {
    $data = App\Models\user_new::all();
    return view('admin/customers')->with('tasks', $data);
})->name('customers');

Route::get('/events', function () {
    return view('admin/events');
})->name('events');

Route::get('/event/{id}', function () {
    return view('admin/event-details');
})->name('event');

Route::get('/employees', function () {
    $data = App\Models\user_new::all();
    return view('admin/employees')->with('tasks', $data);
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

Route::get('/login', function () {
    return view('login');
})->name('login');
 //.... end_of_views ...............................|

//registration
Route::post('/userDetails', [RegisterController::class, 'store']);

 //login_auth
Route::post('/user', [userAuth::class, 'userLogin']);


//add new customer in customer page
Route::post('/saveTask', [RegisterController::class, 'addCustomer']);

//add new customer in event page
Route::post('/insertCustomer', [RegisterController::class, 'insertCustomer']);

//add new employee
Route::post('/addEmployee', [RegisterController::class, 'addEmployee']);

//delete user(employee.costomer)
Route::get('/deleteUser/{user_id}', [RegisterController::class, 'deleteUser']);
