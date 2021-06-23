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

                <div class="row justify-content-center mt-3">
                    <h2>View Employee Report</h2>
                </div>

                <div class="row mt-3">

                    <div class="col-6">
                        Employee <select class="form-group w-75">
                            <option></option>

                        </select>
                    </div>


                    <div class="col-6">

                        <a href="" class="btn btn-primary">Search</a>
                    </div>
                </div>




                <h2 class="row justify-content-center mt-3">(employee name)Employee-Event Report</h2>




                <h4 class="row justify-content-center mt-3 mb-4"> this is for Date and time</h4>



                <div class="row justify-content-center mt-3">
                    <table class=" table table-striped w-100 ml-3">
                        <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Position</th>

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