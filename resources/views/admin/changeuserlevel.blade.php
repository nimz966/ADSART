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

            <div class="container mt-3 col-8">

                <h2 class="row justify-content-center mt-3">Change User Level</h2>

                <div class="row justify-content-center mt-3">
                    <form>
                        <div class="form-group ">
                            <lable>Employee Name</lable>
                            <select class="form-control">
                                <option></option>


                            </select>
                        </div>
                        <div class="form-group">
                            <lable>User Level</lable>
                            <select class="form-control">
                                <option>Temporary</option>
                                <option>Permanent</option>

                            </select>
                        </div>
                        <div>
                            <a href="#" data-dismiss="modal" class="btn btn-primary">Change</a>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
</body>

</html>