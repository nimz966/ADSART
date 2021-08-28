@extends('layout.main')

@section('content')
<div class="container-fluid">

    <h1>Home</h1>
    <!-- {{Auth::user()-> email}} -->
    @if (isset(Auth::user()-> email))
    <!-- <div class="alert alert-danger success-block"> -->
        <!-- <strong>welcom {{Auth::user()->email}}</strong> -->
    <!-- </div> -->
    <br>
    
    @else
    <script>
        window.location = "/authUser";
    </script>
    @endif


</div>
@endsection('content')