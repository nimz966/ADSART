<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\userAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', function () {
        return view('admin/home');
    })->name('home');

    Route::get('/customers', function () {
        $data = App\Models\user_new::where('user_type', 'customer')->get();
        return view('admin/customers')->with('customers', $data);
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

    Route::get('/employeehome', function () {
        $employees = App\Models\User::where('user_type', 'employee')->get()->toArray();
        $data = App\Models\Notice::all();
        return view('employee/employeehome', compact('employees', 'data'));
        // return view('employee/employeehome')->with('notice', $data);
    });
    Route::get('/customerhome', function () {

        return view('customer/customerhome');
    });

    Route::get('/employee-event-report/{employeeId?}', [ReportController::class, 'employeeEvent'])->name('employee-event-report');

    // employee assignment to events (team)
    Route::get('/team/{id}', [TeamController::class, 'createTeam'])->name('team-details');

    Route::post('/event/{event_id}/assign', [TeamController::class, 'assignUsers'])->name('assignUsers');

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

    //update customer
    Route::post('/customer-update', 'App\Http\Controllers\RegisterController@update')->name('customerUpdate');

    //update customer
    Route::post('/event-update', 'App\Http\Controllers\EventController@update')->name('eventUpdate');

    //delete event(employee.customer)
    Route::get('/deleteEvent/{event_id}', [EventController::class, 'deleteEvent']);

    // full-calendar

    Route::get('full-calender', [FullCalenderController::class, 'index']);

    Route::post('full-calender/action', [FullCalenderController::class, 'action']);
});
//.... end_of_views ...............................|

// registration
// Route::post('/userDetails', [RegisterController::class, 'store']);

//login_auth
Route::post('/checklogin', [userAuth::class, 'checkLogin']);
Route::post('/succussLogin', [userAuth::class, 'succussLogin']);
Route::get('/logout', [userAuth::class, 'logout'])->name('logout');
