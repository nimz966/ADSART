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
        background: url('img/bc.png') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

    .main-section {
        margin: 0 auto;
        margin-top: 40px;
        padding: 0;
    }

    .modal-dialog {
        float: right;
        width: 1000px;
        padding-right: 50px;
    }

    .modal-content {
        background-color: #434e5a;
        opacity: 0.8;
        padding: 10px;
        border-radius: 10px;
    }

    .user-img img {
        height: 100px;
        width: 100px;
    }

    .user-img {
        margin-top: -40px;
        margin-bottom: 35px;
        text-align: center;
    }

    .form-group {
        padding: 10px;
    }

    body {
        font-family: 'Nunito', sans-serif;
    }

    #phone {
        text-align: left !important;
    }

    #navitem {
        padding-right: 20px;
    }
    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <div class="col">
                <a class="navbar-brand" href="#"><img src="img/logo.png" height="40"> </a>
                <a class="navbar-brand" href="#"> ADS ART Event Management System</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form>
                <ul class="navbar-nav">
                    <li class="nav-item" id="navitem">
                        <input type="email" class="form-control h-75" placeholder="Enter email">
                    </li>
                    <li class="nav-item" id="navitem">
                        <input type="password" class="form-control h-75" placeholder="Enter password">
                    </li>
                    <li class="nav-item" id="navitem">
                        <button type="submit" class="btn btn-primary h-75 mb-2">Login</button>
                    </li>
                </ul>
            </form>
        </div>

    </nav>
    <div class="modal-dialog">
        <div class="col main-section">
            <div class="modal-content">

                <div class="col-12 form-input">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" class="form-control" placeholder="Enter contact number"
                                pattern="[0-9]{3} [0-9]{7}">
                            <small>Format: 011 8645678</small>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div>
                            <div class="row m-1">
                                <lable>User Type</lable>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label mr-4" for="customRadio1">CEO</label>
                                </div>
                                <div class="col text-center">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Manager</label>
                                </div>
                                <div class="col text-center">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Employee</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter password">
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>