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
                <select class="form-group w-75 h-75 mr-3">
                    <option>Select Employee</option>
                    @foreach($employees as $emp)
                    <option value="{{$emp['user_id']}}">{{$emp['user_name']}}</option>
                    @endforeach
                </select>
                <a href="" class="btn btn-primary h-75">Search</a>
            </div>
        </div>

        <!-- Sub heading -->
        <h2 class="row justify-content-center mt-3">(employee name)Employee-Event Report</h2>

        <h4 class="row justify-content-center mt-3 mb-4"> this is for Date and time</h4>

        <!-- Employee event details table  -->
        <div class="table100 ver1 m-b-110">
            <!-- Table head  -->
            <div class="table100-head">
                <table>
                    <thead>
                        <tr class="row100 head">
                            <th class="cell100 column1">Employee Id</th>
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
                        <tr class="row100 body">
                            <td class="cell100 column1"></td>
                            <td class="cell100 column2"></td>
                            <td class="cell100 column3"></td>
                            <td class="cell100 column4"></td>
                            <td class="cell100 column5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')