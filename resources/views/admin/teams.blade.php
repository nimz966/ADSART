@extends('layout.main')

@section('content')

<div class="container mt-3">

    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Event Details</h2>
        </div>
    </div>

    <div class="wrap-table100">

        <div class="table-title">
            <div class="row">
                <div class="col-sm-8 mb-4">

                    Show <select>
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>75</option>
                    </select> entries

                </div>
                <div class="col-sm-4 mb-4">
                    <div class="search-box">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" placeholder="Search&hellip;">
                    </div>
                </div>
            </div>
        </div>
        <div class="table100 ver1 m-b-110">
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

            <div class="table100-body js-pscroll">
                <table>
                    <tbody>
                        <tr class="row100 body">
                            <td class="cell100 column1"></td>
                            <td class="cell100 column2"></td>
                            <td class="cell100 column3"></td>
                            <td class="cell100 column4"></td>
                            <td class="cell100 column5"></td>
                            <td class="cell100 column6">
                                <a href="{{ route('team-details', 12) }}">status</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection('content')