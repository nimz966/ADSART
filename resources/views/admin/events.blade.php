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
                <form method="post" action="/createEvent">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- Enter event date -->
                        <div class="form-group">
                            <lable>Event Date</lable>
                            <input type="date" class="form-control" name="event_date">
                        </div>

                        <!-- Enter standby date -->
                        <div class="form-group">
                            <lable>Standby Date</lable>
                            <input type="date" class="form-control" name='standby_Date'>
                        </div>

                        <!-- enter event name -->
                        <div class="form-group">
                            <lable>Event Name</lable>
                            <input type="text" class="form-control" name='event_name'>
                        </div>

                        <!-- Enter Location -->
                        <div class="form-group">
                            <lable>Location</lable>
                            <input type="text" class="form-control" name='location'>
                        </div>

                        <!-- Enter customer name -->
                        <div class="form-group">
                            <lable>Customer Name</lable>
                            <select type="text" class="form-control" name=''>
                                <option>Select a customer</option>
                                @foreach($customers as $cus)
                                <option value="{{$cus['user_id']}}">{{$cus['user_name']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Add new customer button -->
                        <div>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-primary">New Customer</a>
                        </div>

                        <!-- Enter starting time -->
                        <div>
                            <lable>Starting Time</lable>
                            <input type="time" class="form-control" name='starting_time'>
                        </div>

                        <!-- Enter standby time -->
                        <div>
                            <lable>Standby Time</lable>
                            <input type="time" class="form-control" name="standby_time">
                        </div>

                        <!-- Select number of cameras -->
                        <div>
                            <lable>Number of Cameras</lable>
                            <input type="number" min="0" class="form-control" name='no_of_cams'>
                        </div>

                        <!-- Enter special requirements -->
                        <div>
                            <lable>Special Requirements</lable>
                            <textarea class="form-control" name='special_requirements'></textarea>
                        </div>
                    </div>

                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-primary">Close</button>
                        <button href="{{ route('event', 21) }}" class="btn btn-primary" type="submit">Create
                            Event</button>
                    </div>
                </form>
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
                    <form role="form" method="post" action="/insertCustomer">
                        {{csrf_field()}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- Enter customer name -->
                        <div class="form-group">
                            <lable>Customer name</lable>
                            <input type="text" name="user_name" class="form-control">
                        </div>

                        <!-- Enter address -->
                        <div class="form-group">
                            <lable>Address</lable>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <!-- Enter contact number -->
                        <div class="form-group">
                            <lable>Contact number</lable>
                            <input type="tel" name="phone_no" id="phone" class="form-control"
                                pattern="[0-9]{3} [0-9]{7}">
                            <small>Format: 011 8645678</small>
                        </div>

                        <!-- Enter email address-->
                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="email" name="email" class="form-control">
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



    <!-- Event details table -->
    <div class="wrapper-table100">
        <table class="table100 ver1 m-b-110 table-striped" id="example">
            <!-- Table head -->
            <div class="table100-head">

                <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Date-Time</th>
                        <th class="cell100 column2">Event Name</th>
                        <th class="cell100 column3">Location</th>
                        <th class="cell100 column4">No of Cameras</th>
                        <th class="cell100 column5">Status</th>
                    </tr>
                </thead>

            </div>

            <!-- Table body -->
            <div class="table100-body js-pscroll">

                <tbody>
                    @foreach($events as $event)
                    <tr class="row100 body">
                        <td class="cell100 column1">{{$event->event_date}}</td>
                        <td class="cell100 column2">{{$event->event_name}}</td>
                        <td class="cell100 column3">{{$event->location}}</td>
                        <td class="cell100 column4">{{$event->no_of_cams}}</td>
                        <td class="cell100 column5">{{$event->status}}

                            <ul class="list-inline m-0">
                                <!-- Edit option-->
                                <li class="list-inline-item float-right" data-toggle="modal" data-placement="bottom"
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
                                <li class="list-inline-item float-right" data-toggle="modal" data-placement="bottom"
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
                    @endforeach
                </tbody>

            </div>
        </table>

    </div>

</div>
@endsection('content')