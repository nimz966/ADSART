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


                <a data-toggle="modal" href="#myModal" class="btn btn-primary">Create Event</a>

                <div class="modal fade bd-example-modal-lg" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Event Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="container"></div>
                            <div class="modal-body">
                                <form>

                                    <div class="form-group">
                                        <lable>Event Date</lable>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Standby Date</lable>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Event Name</lable>
                                        <input type="text" class="form-control" placeholder="Enter Event Name">
                                    </div>
                                    <div class="form-group">
                                        <lable>Location</lable>
                                        <input type="text" class="form-control" placeholder="Enter Event Address">
                                    </div>

                                    <div class="form-group">
                                        <lable>Customer Name</lable>
                                        <select type="text" class="form-control" placeholder="Select Customer">
                                            <option></option>
                                        </select>
                                    </div>
                                    <div>
                                        <a data-toggle="modal" href="#myModal2" class="btn btn-primary">New Customer</a>
                                    </div>
                                    <div>
                                        <lable>Starting Time</lable>
                                        <input type="time" class="form-control">
                                    </div>
                                    <div>
                                        <lable>Standby Time</lable>
                                        <input type="time" class="form-control">
                                    </div>
                                    <div>
                                        <lable>Number of Cameras</lable>
                                        <input type="number" min="0" class="form-control">
                                    </div>
                                    <div>
                                        <lable>Special Requirements</lable>
                                        <textarea class="form-control"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
                                <a href="createdeventdetails" class="btn btn-primary">Create
                                    Event</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade bd-example-modal-lg" id="myModal2" data-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add New Customer</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="container"></div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <lable>Customer name</lable>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <lable>Address</lable>
                                    <input type="text" class="form-control" placeholder="Enter Address">
                                </div>
                                <div class="form-group">
                                    <lable>Contact number</lable>
                                    <input type="tel" id="phone" class="form-control" placeholder="Enter contact number"
                                        pattern="[0-9]{3} [0-9]{7}">
                                    <small>Format: 011 8645678</small>
                                </div>

                                <div class="form-group">
                                    <lable>Email</lable>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="#" data-dismiss="modal" class="btn">Close</a>
                                <a href="#" class="btn btn-primary">Save changes</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row justify-content-center mt-3">
                    <div>
                        <h2 class="row justify-content-center">Events for the day</h2>
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



                </div>

                <div class=" row justify-content-center mt-3">
                    <table class="table table-striped  w-90 ml-3">
                        <thead>
                            <tr>
                                <th>Date-Time</th>
                                <th>Event Name</th>
                                <th>Location</th>
                                <th>No of Cameras</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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