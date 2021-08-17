@extends('layout.main')

@section('content')

<div class="container-fluid">
    <!-- Heading Event Details -->
    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Event Details</h2>
        </div>
    </div>
    <!-- Event Details search section-->
    <div class="wrap-table100">

        <!-- Event Delails Table -->
        <table class="table100 ver1 m-b-110 table-striped" id="example">
            <!-- Table Head -->
            <div class="table100-head">

                <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Event Id</th>
                        <th class="cell100 column2">Event Name</th>
                        <th class="cell100 column3">Date-Time</th>
                        <th class="cell100 column4">Location</th>
                        <th class="cell100 column5">No of Cameras</th>

                    </tr>
                </thead>

            </div>
            <!-- Table body -->
            <div class="table100-body js-pscroll">

                <tbody>
                    @foreach($events as $event)
                    <tr class="row100 body">
                        <td class="cell100 column1">{{ str_pad($event->event_id, 4, 0, false) }}</td>
                        <td class="cell100 column2">{{ $event->event_name }}</td>
                        <td class="cell100 column3">{{ $event->event_date }}</td>
                        <td class="cell100 column4">{{ $event->location }}</td>
                        <td class="cell100 column5">{{ $event->no_of_cams }}

                            <a class="float-right" href="{{ route('team-details', $event->event_id) }}">status</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </div>
        </table>
    </div>
</div>


@endsection('content')