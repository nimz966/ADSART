@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">
        <!-- Main heading  -->
        <div class="row justify-content-center mt-3">
            <h2>View Employee Report</h2>
        </div>
        <!-- Select employee name  -->
        <div class="row mt-3">
            <div class="col-6">
                <select id="selectedEmployee" class="form-group w-75 h-75 mr-3">
                    <option value="null">Select Employee</option>
                    @foreach($employees as $emp)
                    <option value="{{$emp['user_id']}}">{{$emp['user_name']}}</option>
                    @endforeach
                </select>
                <a id="search" class="btn btn-primary h-75">Search</a>
            </div>
        </div>

        @if(isset($user))
        <!-- Sub heading -->
        <h2 class="row justify-content-center mt-3">Employee-Event Report For {{ $user->user_name }}</h2>

        <!-- Employee event details table  -->
        <div class="table100 ver1 m-b-110">
            <!-- Table head  -->
            <div class="table100-head">
                <table>
                    <thead>
                        <tr class="row100 head">
                            <th class="cell100 column1">Event Id</th>
                            <th class="cell100 column2">Event Name</th>
                            <th class="cell100 column3">Date</th>
                            <th class="cell100 column4">Status</th>
                            <th class="cell100 column5">Position</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <!-- Table body  -->
            <div class="table100-body js-pscroll">
                <table>
                    <tbody>
                        @foreach($eventData as $event)
                        <tr class="row100 body">
                            <td class="cell100 column1">{{ $event['id'] }}</td>
                            <td class="cell100 column2">{{ $event['name'] }}</td>
                            <td class="cell100 column2">{{ $event['date'] }}</td>
                            <td class="cell100 column2">{{ $event['status'] }}</td>
                            <td class="cell100 column2">{{ implode(', ', $event['positions']) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection('content')

@push('scripts')
<script>
    $(document).ready(function() {
        $('#search').on('click', function() {
            var employeeId = $('#selectedEmployee').val();

            if (employeeId === "null") return;

            window.location.replace('/employee-event-report/' + employeeId);
        })
    });
</script>
@endpush