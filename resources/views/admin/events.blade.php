@extends('layout.main')

@section('content')
<div class="container-fluid">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Create New Event
    </button>
    <!-- create event modal -->
    <div class="modal fade bd-example-modal-lg" id="myModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <!-- modal header -->
                <div class="modal-header">
                    <h4 class="modal-title">Event Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>

                <!-- modal body-->
                <div class="modal-body">
                    <form>

                        <!-- Enter event date -->
                        <div class="form-group">
                            <lable>Event Date</lable>
                            <input type="date" class="form-control">
                        </div>

                        <!-- Enter standby date -->
                        <div class="form-group">
                            <lable>Standby Date</lable>
                            <input type="date" class="form-control">
                        </div>

                        <!-- enter event name -->
                        <div class="form-group">
                            <lable>Event Name</lable>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Enter Location -->
                        <div class="form-group">
                            <lable>Location</lable>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Enter customer name -->
                        <div class="form-group">
                            <lable>Customer Name</lable>
                            <select type="text" class="form-control">
                                <option></option>
                            </select>
                        </div>

                        <!-- Add new customer button -->
                        <div>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-primary">New Customer</a>
                        </div>

                        <!-- Enter starting time -->
                        <div>
                            <lable>Starting Time</lable>
                            <input type="time" class="form-control">
                        </div>

                        <!-- Enter standby time -->
                        <div>
                            <lable>Standby Time</lable>
                            <input type="time" class="form-control">
                        </div>

                        <!-- Select number of cameras -->
                        <div>
                            <lable>Number of Cameras</lable>
                            <input type="number" min="0" class="form-control">
                        </div>

                        <!-- Enter special requirements -->
                        <div>
                            <lable>Special Requirements</lable>
                            <textarea class="form-control"></textarea>
                        </div>
                    </form>
                </div>

                <!-- modal footer -->
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
                    <a href="{{ route('event', 21) }}" class="btn btn-primary">Create
                        Event</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Add new customer modal -->
    <div class="modal fade bd-example-modal-lg" id="myModal2" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <!-- modal content-->
            <div class="modal-content">

                <!-- modal header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <!-- modal body -->
                <div class="modal-body">
                    <form role="form" method="" action="">
                        <input type="hidden" name="_token" value="">
                        <!-- Enter customer name -->
                        <div class="form-group">
                            <lable>Customer name</lable>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Enter address -->
                        <div class="form-group">
                            <lable>Address</lable>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Enter contact number -->
                        <div class="form-group">
                            <lable>Contact number</lable>
                            <input type="tel" id="phone" class="form-control" pattern="[0-9]{3} [0-9]{7}">
                            <small>Format: 011 8645678</small>
                        </div>

                        <!-- Enter email address-->
                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="email" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary" aria-hidden="true">Add</button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- content heading-->
    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Event Details</h2>
        </div>
    </div>

    <!-- Search events -->
    <div class="wrap-table100">
        <!-- Table Title -->
        <div class="table-title">
            <div class="row">
                <!-- Enter entries -->
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

        <!-- Event details table -->
        <div class="table100 ver1 m-b-110">

            <!-- Table head -->
            <div class="table100-head">
                <table>
                    <thead>
                        <tr class="row100 head">
                            <th class="cell100 column1">Date-Time</th>
                            <th class="cell100 column2">Event Name</th>
                            <th class="cell100 column3">Location</th>
                            <th class="cell100 column4">No of Cameras</th>
                            <th class="cell100 column5">Status</th>
                            <th class="cell100 column5"></th>
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
                            <td class="cell100 column6">
                                <ul class="list-inline m-0">
                                    <!-- Edit option-->
                                    <li class="list-inline-item" data-toggle="modal" data-placement="bottom"
                                        title="Edit" data-target="#mymodal"><a id="edit"><i class="fa fa-edit"></i></a>
                                    </li>
                                    <!-- Edit event modal -->
                                    <div class="modal fade bd-example-modal-lg" id="mymodal">
                                        <div class="modal-dialog modal-md" role="document">
                                            <div class="modal-content">

                                                <!-- modal header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Change Event Details</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="container"></div>

                                                <!-- modal body-->
                                                <div class="modal-body">
                                                    <form>

                                                        <!-- Enter event date -->
                                                        <div class="form-group">
                                                            <lable>Event Date</lable>
                                                            <input type="date" class="form-control">
                                                        </div>

                                                        <!-- Enter standby date -->
                                                        <div class="form-group">
                                                            <lable>Standby Date</lable>
                                                            <input type="date" class="form-control">
                                                        </div>

                                                        <!-- enter event name -->
                                                        <div class="form-group">
                                                            <lable>Event Name</lable>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <!-- Enter Location -->
                                                        <div class="form-group">
                                                            <lable>Location</lable>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <!-- Enter customer name -->
                                                        <div class="form-group">
                                                            <lable>Customer Name</lable>
                                                            <select type="text" class="form-control">
                                                                <option></option>
                                                            </select>
                                                        </div>

                                                        <!-- Enter starting time -->
                                                        <div>
                                                            <lable>Starting Time</lable>
                                                            <input type="time" class="form-control">
                                                        </div>

                                                        <!-- Enter standby time -->
                                                        <div>
                                                            <lable>Standby Time</lable>
                                                            <input type="time" class="form-control">
                                                        </div>

                                                        <!-- Select number of cameras -->
                                                        <div>
                                                            <lable>Number of Cameras</lable>
                                                            <input type="number" min="0" class="form-control">
                                                        </div>

                                                        <!-- Enter special requirements -->
                                                        <div>
                                                            <lable>Special Requirements</lable>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- modal footer -->
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn btn-primary">Save
                                                        Changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button trigger modal for delete-->
                                    <li class="list-inline-item" data-toggle="modal" data-placement="bottom"
                                        title="Delete" data-target="#exampleModal"><a id="delete"><i
                                                class="fa fa-trash"></i></a>
                                    </li>

                                    <!-- Modal for delete-->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    Are you sure that you want to permanently delete this record ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-dismiss="modal">Yes</button>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection('content')