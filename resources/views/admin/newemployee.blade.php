<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>newcustomer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="public/css/style" rel="stylesheet">
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
                <a data-toggle="modal" href="#myModal" class="btn btn-primary">New Employee</a>

                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Employee Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="container"></div>
                            <div class="modal-body">
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
                                            <input type="radio" id="customRadio1" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio pb-3">
                                            <input type="radio" id="customRadio2" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <lable>Employee Address</lable>
                                        <input type="text" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <lable>Employee Contact number</lable>
                                        <input type="tel" id="phone" class="form-control"
                                            placeholder="Enter contact number" pattern="[0-9]{3} [0-9]{7}">
                                        <small>Format: 011 8645678</small>
                                    </div>
                                    <div class="form-group">
                                        <lable>Email</lable>
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <lable>Employee Status</lable>
                                        <select name="Select Status" class="form-control">
                                            <option>Temporary</option>
                                            <option>Permanent</option>

                                        </select>
                                    </div>
                                    <div class="modal-body row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Audio Operator
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Cameraman
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Camera
                                                Assistant
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Camera Operator
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Customer
                                                Officer
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Driver
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Editor
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Engineer
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Flow Manager
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Graphic
                                                Operator
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Labor
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Manager
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Production
                                                Manager
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Setup
                                                Technician
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Slomo Operator
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Technical
                                                Assistant
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Technician
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="">Vision Operator
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                            <div class="modal-footer">
                                <a href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
                                <a href="createdeventdetails.php" data-dismiss="modal" class="btn btn-primary">New
                                    Employee</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="row justify-content-center">Employees</h2>
                </div>
                <div class="col-12">

                    <div class="row">
                        <div class="col-9">
                            Show <select>
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                                <option>75</option>
                            </select> entries
                        </div>
                        <div class="col justify-content-end">
                            Search <input type="search">
                        </div>
                    </div>
                </div>
                <div class=" row justify-content-center mt-3 w-90">
                    <table class="table table-striped  ml-3">
                        <thead>
                            <tr>
                                <th>Employee No</th>
                                <th>Employee Name</th>
                                <th>Status</th>
                                <th>User Level</th>
                                <th>Contact Number</th>
                                <th>Positions</th>
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
    </div>
</body>

</html>