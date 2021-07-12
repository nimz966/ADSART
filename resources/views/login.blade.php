<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="public/css/style" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

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
            padding: 20px;
            font-size: 13px;
            color: darkgray;
        }

        .modal-dialog {
            float: right;
            width: 1000px;
            padding-right: 100px;
        }

        .modal-content {
            background-color: #434e5a;
            padding: 10px;
            border-radius: 10px;
        }

        .form-group {
            padding: 10px;
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
            height: 25px;
            font-size: 13px;
        }

        #login {
            width: 60px;
            height: 26px;
            font-size: 13px;
            display: grid;
        }

        .form-group {
            padding: 15px;
        }

        .navbar-brand {
            font-family: sans-serif;
        }
    </style>
</head>

<!-- Navbar -->

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <!-- Nav Brand -->
        <div class="container-fluid">
            <div class="col">
                <a class="navbar-brand" href="#"><img src="img/logo.png" height="40"> </a>
                <a class="navbar-brand" href="#"> ADS ART Event Management System</a>
            </div>
        </div>
        <!-- Login Form -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <form action="user" method="POST">
                @csrf
                <ul class="navbar-nav">
                    <li class="nav-item" id="navitem">
                        <input type="text" name="user" class="form-control h-75" placeholder="Enter email">
                    </li>
                    <li class="nav-item" id="navitem">
                        <input type="password" class="form-control h-75" placeholder="Enter password">
                    </li>
                    <li class="nav-item" id="navitem">
                        <button type="submit" id="login" class="btn btn-primary btn-sm">Login</button>
                    </li>
                </ul>
                 <a href="/register" class="">i dont have a account</a>   
            </form>
        </div>
    </nav>


</body>

</html>