@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">

        <!-- Event Name Heading -->
        <div class="row justify-content-center mt-3">
            <h2 class="row justify-content-center mt-3">Event:</h2>
        </div>

        <!-- Sub Heading -->
        <div class="row justify-content-center mb-3">
            <h4 class="row justify-content-center mt-3">Select the number of members for each position </h4>
        </div>

        <form action="/event/{{$event_id}}/assignment" method="post">
            {{csrf_field()}}
            <div class="row pt-3">
                @foreach($positions as $position)
                <div class="col-4">
                    <div class="form-check">
                        <lable>{{$position->description}}</lable>
                        <input name="{{$position->position_id}}" type="number" class="form-control" min="0" value="">
                    </div>
                </div>
                @endforeach
                <div>
                    <!-- Add new position button -->
                    <a href="#" class="btn btn-primary mt-3 ml-3">New Position</a>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mt-3 ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')