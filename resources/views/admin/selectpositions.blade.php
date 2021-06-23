<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>newcustomer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="row">
            @include('admin.background.header')
        </div>
        <div class="row">
            @include('admin.background.sidebar')
            <div class="container mt-3 col">

                <div class="row justify-content-center mt-3">
                    <h2 class="row justify-content-center mt-3">Event:</h2>


                    <h4 class="row justify-content-center mt-3">Select the number of members for each position </h4>

                </div>
                <div class="row pt-3">
                    <div class="col-4">
                        <div class="form-check">
                            <lable>Audio Operator</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Cameraman</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Camera Assistant</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Camera Operator</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Customer Officer</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Driver</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary mt-3 ml-3">New Position</a>
                            <a href="assignemployee" class="btn btn-primary mt-3 ml-3">Submit</a>
                        </div>
                    </div>



                    <div class="col-4">

                        <div class="form-check">
                            <lable>Editor</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Engineer</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Flow Manager</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Graphic Operator</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Labor</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Manager</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>

                    </div>
                    <div class="col-4">

                        <div class="form-check">
                            <lable>Production Manager</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Setup Technician</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Slomo Operator</lable>
                            <input type="number" class="form-control" min="0" value="">
                        </div>
                        <div class="form-check">
                            <lable>Technical Assistant</lable>
                            <input type="number" class="form-control" min="0" value="">

                        </div>
                        <div class="form-check">
                            <lable>Technician</lable>
                            <input type="number" class="form-control" min="0" value="">

                        </div>
                        <div class="form-check">
                            <lable>Vision Operator</lable>
                            <input type="number" class="form-control" min="0" value="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>