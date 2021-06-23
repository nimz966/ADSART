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

                <h2 class="row justify-content-center mt-3">Event:</h2>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <lable>position</lable>
                            <select name="Select Status" class="form-control">
                                <option></option>
                                <option></option>

                            </select>
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="row justify-content-center mt-3">
                            <table class=" table table-striped w-100">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Employee Name</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td></td>
                                        <td></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="asignemployee.php" class="btn btn-primary mt-3 ml-3">Inform Team</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>