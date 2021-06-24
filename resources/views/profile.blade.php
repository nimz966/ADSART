@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3">
        <h2>User Profile</h2>
        <form>
            <div class="form-group">
                <lable>Employee Name</lable>
                <input type="text" class="form-control" placeholder="Enter Employee Name">
            </div>
            <div class="form-group">
                <lable>NIC</lable>
                <label for="quantity"></label>
                <input type="text" min="9" max="9" class="form-control">
            </div>
            <div>
                <lable>Gender</lable>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Male</label>
                </div>
                <div class="custom-control custom-radio pb-3">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
            </div>
            <div class="form-group">
                <lable>Employee Address</lable>
                <input type="text" class="form-control" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <lable>Employee Contact number</lable>
                <input type="tel" id="phone" class="form-control" placeholder="Enter contact number" pattern="[0-9]{3} [0-9]{7}">
                <small>Format: 011 8645678</small>
            </div>
            <div class="form-group">
                <lable>Email</lable>
                <input type="email" class="form-control" placeholder="Enter email">
            </div>

            <h2 class="mt-5">Change Password</h2>
            <hr>
            <div class="form-group w-100">
                <lable>Current Password</lable>
                <input type="text" class="form-control">
            </div>
            <div class="form-group w-100">
                <lable>New Password</lable>
                <input type="password" class="form-control">
            </div>
            <div class="form-group w-100">
                <lable>Confirm Password</lable>
                <input type="password" class="form-control">
            </div>

            <div>
                <a href="#" data-dismiss="modal" class="btn btn-primary">Reset Password</a>
            </div>
        </form>
    </div>
</div>
@endsection('content')