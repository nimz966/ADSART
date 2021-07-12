<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="public/css/style" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    body {
        background: url('img/nn.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

    .main-section {
        margin: 0 auto;
        margin-top: 40px;
        padding: 20px;
        font-size: 15px;
        opacity: 0.7;
        color: white;
        font-weight: bold;
    }

    .modal-dialog {
        float: center;
        width: 1000px;


    }

    .modal-content {
        background-color: #434e5a;
        padding: 15px;
        border-radius: 10px;
    }

    .form-group {
        padding: 10px;
        color: white;
        font-weight: bold;
    }

    #phone {
        text-align: left !important;
    }

    #navitem {
        padding-right: 20px;
        width: 200px;
        height: 35px;
    }

    .form-control {
        height: 30px;
        font-size: 15px;
        color: white;
        font-weight: bold;
    }

    #login {
        width: 60px;
        height: 26px;
        font-size: 13px;
        display: grid;
    }

    .form-group {
        padding: 18px;
    }

    .navbar-brand {
        font-family: sans-serif;
        font-size: 24px;
        color: #ffffcc;
        font-weight: bold;
    }
    </style>
</head>

<!-- Navbar -->

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <!-- Nav Brand -->
        <div class="container-fluid">
            <div class="col">
                <a class="navbar-brand" href="#"><img src="img/logo.png" height="50"> </a>
                <a class="navbar-brand" href="#"> ADS ART Event Management System</a>
            </div>
        </div>
        <!-- Login Form -->

        @if(session('status'))
        <div class="alert alert-success">{{(session('status'))}}</div>
        @endif
        </form>
        </div>
    </nav>

    <!-- registration Form -->
    <div class="modal-dialog col-9">
        <div class="col main-section">
            <div class="modal-content">

                <div class="col-12 form-input">
                    <form method="post" action="{{url ('userDetails') }}">
                        {{csrf_field()}}

                        <!-- User Name -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="User name">
                        </div>
                        <!-- Address -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Enter address">
                        </div>
                        <!-- Contact Number -->
                        <div class="form-group">
                            <input type="tel" id="phone" class="form-control" name="phone_no"
                                placeholder="Enter contact number" pattern="[0-9]{3} [0-9]{7}">
                            <small>Format: 011 8645678</small>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <input type="email" class="form-control" name='email' placeholder="Enter email">
                        </div>
                        <!-- User Types -->
                        <div>
                            <div class="row m-1">
                                <lable>User Type</lable>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <input type="radio" id="customRadio1" value="ceo" name="user_type"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">CEO</label>
                                </div>
                                <div class="col text-center">
                                    <input type="radio" id="customRadio2" value="manager" name="user_type"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Manager</label>
                                </div>
                                <div class="col text-center">
                                    <input type="radio" id="customRadio3" value="employee" name="user_type"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Employee</label>
                                </div>
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <input type="password" class="form-control" name='password' placeholder="Enter password">
                        </div>
                        <!-- registration -->
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary btn-sm"
                                id="register"><small>Register</small></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>