@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">

        <!-- Event Name Heading -->
        <div class="row justify-content-center mt-3">
            <h2 class="row justify-content-center mt-3">Event:</h2>
        </div>

        <!-- Sub Heading -->
        <div class="row justify-content-center mb-3">
            <h4 class="row justify-content-center mt-3">Select the number of members for each position </h4>
        </div>

        <!-- Positions -->
        <div class="row pt-3">
            <!-- first col -->
            <div class="col-4">

                <!-- Audio Operator-->
                <div class="form-check">
                    <lable>Audio Operator</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Cameraman -->
                <div class="form-check">
                    <lable>Cameraman</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Camera Assistant -->
                <div class="form-check">
                    <lable>Camera Assistant</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Camera Oparator -->
                <div class="form-check">
                    <lable>Camera Operator</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Customer Officer -->
                <div class="form-check">
                    <lable>Customer Officer</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Driver -->
                <div class="form-check">
                    <lable>Driver</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>
                <!-- buttons -->
                <div>
                    <!-- Add new position button -->
                    <a href="#" class="btn btn-primary mt-3 ml-3">New Position</a>
                    <!-- Submit button -->
                    <a href="{{ route('employee-assignment', 2) }}" class="btn btn-primary mt-3 ml-3">Submit</a>
                </div>
            </div>

            <!-- Second col -->
            <div class="col-4">

                <!-- Editor -->
                <div class="form-check">
                    <lable>Editor</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Engineer -->
                <div class="form-check">
                    <lable>Engineer</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Flow manager -->
                <div class="form-check">
                    <lable>Flow Manager</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Graphic Operator -->
                <div class="form-check">
                    <lable>Graphic Operator</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Labor -->
                <div class="form-check">
                    <lable>Labor</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Manager -->
                <div class="form-check">
                    <lable>Manager</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>
            </div>

            <!-- Third col -->
            <div class="col-4">

                <!-- Product Manager -->
                <div class="form-check">
                    <lable>Production Manager</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Setup Technician -->
                <div class="form-check">
                    <lable>Setup Technician</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Slomo operator -->
                <div class="form-check">
                    <lable>Slomo Operator</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Technical Assistant -->
                <div class="form-check">
                    <lable>Technical Assistant</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Technician -->
                <div class="form-check">
                    <lable>Technician</lable>
                    <input type="number" class="form-control" min="0" value="">
                </div>

                <!-- Vision operator -->
                <div class="form-check">
                    <lable>Vision Operator</lable>
                    <input type="number" class="form-control" min="0" value="">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')