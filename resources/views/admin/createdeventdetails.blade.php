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
                <div class="row row justify-content-center mt-3">
                    <h2 class="mb-3"> Event:</h2>
                </div>
                <div class="row">
                    <div class="col-6">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Event Date</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Stand-by Date</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>place</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Stand-by Time</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Starting Time</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Number of Cameras</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Time Created</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Special Requirements</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" data-dismiss="modal" class="btn btn-primary">View Calender</a>
                        <a href="#" data-dismiss="modal" class="btn btn-primary">Confirm</a>
                    </div>

                    <div class="col-6">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Customer Name</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Contact Number</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
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