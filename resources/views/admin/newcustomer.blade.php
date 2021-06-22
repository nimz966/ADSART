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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add
                    new
                    customer</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="col-12 form-input">
                                <h2> Customer Detail Form</h2>
                                <form>

                                    <div class="form-group">
                                        <lable>Customer name</lable>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <lable>Address</lable>
                                        <input type="text" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <lable>Contact number</lable>
                                        <input type="tel" id="phone" class="form-control"
                                            placeholder="Enter contact number" pattern="[0-9]{3} [0-9]{7}">
                                        <small>Format: 011 8645678</small>
                                    </div>

                                    <div class="form-group">
                                        <lable>Email</lable>
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>


                                    <button type="submit" class="btn btn-info">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-3">
                    <div>
                        <h2 class="row">Customer Details</h2>
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
                            <div>
                                Search <input type="search">
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row justify-content-center mt-3">
                    <table class="table table-striped w-85">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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