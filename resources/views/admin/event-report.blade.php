@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">
        <!-- Main heading -->
        <h2 class="row justify-content-center mt-3">Event Report</h2>

        <!-- Select dates -->
        <div class="row justify-content-center mt-3">
            <!-- secect date from -->
            <div class="form-group col-4">
                <lable>From Date</lable>
                <input type="date" class="form-control w-75 h-50">
            </div>

            <!-- Select date to -->
            <div class="form-group col-4">
                <lable>To Date</lable>
                <input type="date" class="form-control w-75 h-50">
            </div>

            <!-- Search button -->
            <div class="form-group col-4">
                <br>
                <a href="" class="btn btn-primary h-50">Search</a>
            </div>
        </div>


        <!-- Event report -->
        <div>
            <!-- main heading -->
            <div>
                <h2 class="row justify-content-center mt-3">Event Management Syatem - Event Report</h2>
            </div>

            <!-- Sub heading -->
            <div>
                <h2 class="row justify-content-center">This is for date and time</h2>
            </div>

            <!-- Event details table -->
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <!-- Table header -->
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">Event Id</th>
                                    <th class="cell100 column2">Event Name</th>
                                    <th class="cell100 column3">Date</th>
                                    <th class="cell100 column4">Status</th>
                                    <th class="cell100 column5">Payment Status</th>
                                    <th class="cell100 column6">No of Cameras</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <!-- Table body -->
                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column1"></td>
                                    <td class="cell100 column2"></td>
                                    <td class="cell100 column3"></td>
                                    <td class="cell100 column4"></td>
                                    <td class="cell100 column5"></td>
                                    <td class="cell100 column6"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')