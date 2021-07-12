@extends('layout.main')

@section('content')

<div class="container mt-3">
    <!-- Heading Event Details -->
    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Event Details</h2>
        </div>
    </div>
    <!-- Event Details search section-->
    <div class="wrap-table100">
        <div class="table-title">
            <div class="row">
                <!-- Select entries -->
                <div class="col-sm-8 mb-4">
                    Show <select>
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>75</option>
                    </select> entries
                </div>
                <!-- Search bar -->
                <div class="col-sm-4 mb-4">
                    <div class="search-box">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" placeholder="Search&hellip;">
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Delails Table -->
        <div class="table100 ver1 m-b-110">
            <!-- Table Head -->
            <div class="table100-head">
                <table>
                    <thead>
                        <tr class="row100 head">
                            <th class="cell100 column1">Event Id</th>
                            <th class="cell100 column2">Event Name</th>
                            <th class="cell100 column3">Date-Time</th>
                            <th class="cell100 column4">Location</th>
                            <th class="cell100 column5">No of Cameras</th>
                            <th class="cell100 column5"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- Table body -->
            <div class="table100-body js-pscroll">
                <table>
                    <tbody>
                        @foreach($events as $event)
                        <tr class="row100 body">
                            <td class="cell100 column1">{{ str_pad($event->event_id, 4, 0, false) }}</td>
                            <td class="cell100 column2">{{ $event->event_name }}</td>
                            <td class="cell100 column3">{{ $event->event_date }}</td>
                            <td class="cell100 column4">{{ $event->location }}</td>
                            <td class="cell100 column5">{{ $event->no_of_cams }}</td>
                            <td class="cell100 column6">
                                <a href="{{ route('team-details', $event->event_id) }}">status</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection('content')