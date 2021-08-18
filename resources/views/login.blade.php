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
        font-size: 14px;
    }

    #title {
        font-size: 24px;
        color: #ffffcc;
        font-weight: bold;
    }

    #login {
        width: 60px;
        height: 35px;
        font-size: 14px;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-muted">
        <!-- Nav Brand -->
        <div class="container-fluid" id="nav">
            <div class="col">
                <a class="navbar-brand" href="#"><img src="img/logo.png" height="50"> </a>
                <a class="navbar-brand" href="#" id="title"> ADS ART Events Management System</a>
            </div>
        </div>
        <!-- Login Form -->
         <!-- @if (isset(Auth::user()->email))
        <script>
            window.location = "/home"
        </script>
        @endif  -->

        @if ($message = Session:: get ('error'))
        <div class="alert alert-danger alert-block">
            <button class="type-button" class="close" data-dismiss="alert">X</button>
            <strong>{{$message}}</strong>
        </div>
        @endif



        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="collapse navbar-collapse" id="navbarNav">
            <form method="post" action=/checklogin>
                @csrf
                <ul class="navbar-nav">
                    <li class="nav-item" id="navitem">

                        <input type="text" name="email" class="form-control h-100" placeholder="Enter email"
                            value="{{old('email')}}">
                        <!-- <span class="text danger">@error('email') {{$message}} @enderror</span> -->
                    </li>
                    <li class="nav-item" id="navitem">
                        <input type="password" name="password" class="form-control h-100" placeholder="Enter password">
                        <!-- <span class="text danger">@error ('password') {{$message}} @enderror</span> -->

                    </li>
                    <li class="nav-item" id="navitem">
                        <button type="submit" id="login" name="button" class="btn btn-primary btn-sm">Login</button>

                    </li>
                </ul>
                <!-- <a href="/register"></a> -->
            </form>
        </div>
    </nav>


</body>

</html>