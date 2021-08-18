<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\userAuth;
use Illuminate\Http\Request;

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
    $events = App\Models\Event::all();
    $customers = App\Models\User::where('user_type', 'customer')->get()->toArray();
    return view('admin/events', compact('events', 'customers'));
})->name('events');

Route::get('/event/{id}', function () {
    return view('admin/event-details');
})->name('event');

Route::post('/event/{id}/assignment', function () {
    $employees = App\Models\User::where('user_type', 'customer')->get()->toArray();
    return view('admin/employee-assignment');
})->name('employee-assignment');

Route::get('/employees', function () {
    $employees = App\Models\User::where('user_type', 'employee')->get();
    $positions = App\Models\Positions::All();
    return view('admin/employees', compact('employees', 'positions'));
})->name('employees');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/teams', function () {
    $events = App\Models\Event::all();
    return view('admin/teams', compact('events'));
})->name('teams');

Route::get('/team/{id}', function (Request $request) {
    $event_id = $request->id;
    $positions = App\Models\Positions::All();
    return view('admin/team-details', compact('positions', 'event_id'));
})->name('team-details');

Route::get('/newnotice', function () {
    return view('admin/newnotice');
});
Route::get('/notices', function () {
    $data = App\Models\Notice::all();
    return view('admin/notices')->with('tasks', $data);
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

Route::get('/employeehome', function () {
    return view('employee/employeehome');
});
Route::get('/customerhome', function () {
    return view('customer/customerhome');
});
//.... end_of_views ...............................|

//registration
Route::post('/userDetails', [RegisterController::class, 'store']);

//login_auth
Route::post('/checklogin', [userAuth::class, 'checkLogin']);
Route::post('/succussLogin', [userAuth::class, 'succussLogin']);
Route::post('/main/logout', [userAuth::class, 'logout']);
//Route::post('check',[userAuth::class, 'check']); 

//add new customer in customer page
Route::post('/saveTask', [RegisterController::class, 'addCustomer']);

//add new customer in event page
Route::post('/insertCustomer', [RegisterController::class, 'insertCustomer']);

//add new employee
Route::post('/addEmployee', [RegisterController::class, 'addEmployee']);

//delete user(employee.customer)
Route::get('/deleteUser/{user_id}', [RegisterController::class, 'deleteUser']);



// create event
Route::post('/createEvent', [EventController::class, 'createEvent']);

//Publish notice
Route::post('/addNotice', [NoticeController::class, 'addNotice']);

//delete Notice
Route::get('/deleteNotice/{notice_id}', [NoticeController::class, 'deleteNotice']);