@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3">
        <form>

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