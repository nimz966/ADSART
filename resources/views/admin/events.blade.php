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

                        <div>
                            <lable>Ending Time</lable>
                            <input type="time" class="form-control" name='ending_time'>
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
                        <th class="cell100 column1">Date</th>
                        <th class="cell100 column2">Standby Date</th>
                        <th class="cell100 column2">Event Name</th>
                        <th class="cell100 column2">Location</th>
                        <th class="cell100 column2">Starting Time</th>
                        <th class="cell100 column2">Ending Time</th>
                        <th class="cell100 column2">Standbt Time</th>
                        <th class="cell100 column2">No of Cameras</th>
                        <th class="cell100 column1" colspan="2">Actions</th>
                    </tr>
                </thead>

            </div>

            <!-- Table body -->
            <div class="table100-body js-pscroll">

                <tbody>
                    @foreach($events as $event)
                    <tr class="row100 body">
                        <td class="event_date">{{$event->event_date}}</td>
                        <td class="standby_date">{{$event->standby_date}}</td>
                        <td class="event_name">{{$event->event_name}}</td>
                        <td class="location">{{$event->location}}</td>
                        <td class="starting_time">{{$event->starting_time}}</td>
                        <td class="ending_time">{{$event->ending_time}}</td>
                        <td class="standby_time">{{$event->standby_time}}</td>
                        <td class="no_of_cams">{{$event->no_of_cams}}</td>
                        <td>
                            <!-- Button trigger modal for edit-->
                            <a type="button" class="m-r-15 text-muted edit" data-toggle="modal"
                                data-eventid="{{$event->event_id}}" data-target="#update">
                                <i class="fa fa-edit" id="edit"></i>
                            </a>
                        </td>
                        <td>
                            <a type="button" class="m-r-15 text-muted delete" data-toggle="modal"
                                data-eventid="{{$event->event_id}}" data-target="#exampleModal1">
                                <i class="fa fa-trash" id="delete"></i>
                            </a>
                        </td>


                    </tr>
                    @endforeach
                </tbody>

            </div>
        </table>

    </div>

</div>

<!-- modal -->
<div id="update" class="modal fade" role="dialog" aria-hidden="true">

    <!-- modal-dialog -->
    <div class="modal-dialog modal-md" role="document">
        <!--modal-content -->
        <div class="modal-content">
            <div class="modal-header text-write">
                <h1 class="modal-title"> Edit Event Details</h1>
                <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>


            <form role="form" method="post" action="{{route('eventUpdate')}}">
                {{csrf_field()}}

                <input type="text" hidden class="col-sm-9 form-control" id="event_id" name="event_id" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <lable>Event Date</lable>
                        <input type="date" class="form-control" name="event_date" id="event_date">
                    </div>

                    <!-- Enter standby date -->
                    <div class="form-group">
                        <lable>Standby Date</lable>
                        <input type="date" class="form-control" name="standby_date" id="standby_date">
                    </div>

                    <!-- enter event name -->
                    <div class="form-group">
                        <lable>Event Name</lable>
                        <input type="text" class="form-control" name="event_name" id="event_name">
                    </div>

                    <!-- Enter Location -->
                    <div class="form-group">
                        <lable>Location</lable>
                        <input type="text" class="form-control" name="location" id="location">
                    </div>

                    <!-- Enter customer name -->
                    <!-- <div class="form-group">
                        <lable>Customer Name</lable>
                        <select type="text" class="form-control" >
                            <option></option>
                        </select>
                    </div> -->

                    <!-- Enter starting time -->
                    <div>
                        <lable>Starting Time</lable>
                        <input type="time" class="form-control" name="starting_time" id="starting_time">
                    </div>
                    <div>
                        <lable>Ending Time</lable>
                        <input type="time" class="form-control" name='ending_time' id='ending_time'>
                    </div>
                    <!-- Enter standby time -->
                    <div>
                        <lable>Standby Time</lable>
                        <input type="time" class="form-control" name="standby_time" id="standby_time">
                    </div>

                    <!-- Select number of cameras -->
                    <div>
                        <lable>Number of Cameras</lable>
                        <input type="number" min="0" class="form-control" name="no_of_cams" id="no_of_cams">
                    </div>

                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary waves-light" id="" user_name="">Save
                        Changes</button>

                </div>

            </form>

        </div>
    </div>
</div>
<!-- Modal for delete -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Are you sure that you want to permanently delete this record ?
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary btn-sm confirm-delete">Yes </button>
                <button type="button" class="btn btn-primary btn-sm cancel-delete" data-dismiss="modal">No</button>
            </div>

        </div>
    </div>
</div>
@endsection('content')

@push('scripts')
<script>
$(document).ready(function() {
    var deleteEventId;

    $('.delete').on('click', function() {
        deleteEventId = $(this).data('eventid');
    });

    $('.confirm-delete').on('click', function() {
        window.location.replace("/deleteEvent/" + deleteEventId);
    });

    $('.cancel-delete').on('click', function() {
        deleteEventId = undefined;
    });

    $('.edit').on('click', function() {
        var _this = $(this).parents('tr');
        var eventId = $(this).data('eventid');

        $('#event_id').val(eventId);
        $('#event_date').val(_this.find('.event_date').text());
        $('#standby_date').val(_this.find('.standby_date').text());
        $('#event_name').val(_this.find('.event_name').text());
        $('#location').val(_this.find('.location').text());
        $('#starting_time').val(_this.find('.starting_time').text());
        $('#ending_time').val(_this.find('.ending_time').text());
        $('#standby_time').val(_this.find('.standby_time').text());
        $('#no_of_cams').val(_this.find('.no_of_cams').text());
    });
});
</script>
@endpush