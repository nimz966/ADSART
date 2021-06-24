@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">
        <div class="row justify-content-center mt-3">
            <div>
                <h2 class="row justify-content-center">Event Details</h2>
            </div>
            <div class="col-12">

                <div class="row">
                    <div class="col-9">
                        Show <select>
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>75</option>
                        </select> entries
                    </div>
                    <div class="col justify-content-end">
                        Search <input type="search">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mt-3">
                <table class=" table table-striped ">
                    <thead>
                        <tr>
                            <th>Event Id</th>
                            <th>Event Name</th>
                            <th>Date-Time</th>
                            <th>Location</th>
                            <th>No of cameras</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
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