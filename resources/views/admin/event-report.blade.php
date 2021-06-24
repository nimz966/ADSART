@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">

        <h2 class="row justify-content-center mt-3">Event Report</h2>

        <div class="row justify-content-center mt-3">
            <div class="form-group col-4">
                <lable>From Date</lable>
                <input type="date" class="form-control w-75">
            </div>
            <div class="form-group col-4">
                <lable>To Date</lable>
                <input type="date" class="form-control w-75">
            </div>
            <div class="form-group col-4">
                <br>
                <a href="" class="btn btn-primary">Search</a>
            </div>
        </div>

        <h2 class="row justify-content-center mt-3">Event Management Syatem-Event Report</h2>

        <h4 class="row justify-content-center mt-3 mb-5"> this is for Date and time</h4>

        <div class="row justify-content-center mt-3">
            <table class=" table table-striped w-100  ml-3">
                <thead>
                    <tr>
                        <th>Event Id</th>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Payment Status</th>
                        <th>Number of Cameras</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection('content')