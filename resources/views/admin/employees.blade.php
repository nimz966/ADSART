@extends('layout.main')

@section('content')
<div class="container-fluid">

    <a data-toggle="modal" href="#myModal" class="btn btn-primary">New Employee</a>
    <!-- New employee modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Employee Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Employee details form -->


                    <!-- Employee name -->
                    <form role="form" method="post" action="addEmployee">
                        {{csrf_field()}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <lable>Employee Name</lable>
                            <input type="text" name="user_name" class="form-control">
                        </div>

                        <!-- Employee NIC -->
                        <div class="form-group">
                            <lable>NIC</lable>
                            <label for="quantity"></label>
                            <input type="text" min="9" max="9" class="form-control">
                        </div>


                        <!-- Employee Address -->
                        <div class="form-group">
                            <lable>Employee Address</lable>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <!-- Employee contact number -->
                        <div class="form-group">
                            <lable>Employee Contact number</lable>
                            <input type="tel" id="phone" name="phone_no" class="form-control"
                                pattern="[0-9]{3} [0-9]{7}">
                            <small>Format: 011 8645678</small>
                        </div>

                        <!-- Employee email -->
                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <!-- Employee status -->
                        <div class="form-group">
                            <lable>Employee Status</lable>
                            <select name="Select Status" class="form-control">
                                <option>Temporary</option>
                                <option>Permanent</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <lable> Password </lable>
                            <input type="password" name="password" class="form-control h-100">
                        </div>
                        <!-- Employee positions -->
                        <div class="modal-body row">
                            @foreach($positions as $pos)
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" name="positions[]" class="form-check-input"
                                        value="{{$pos->position_id}}">{{$pos->description}}
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- modal footer  -->
                        <div class="modal-footer">
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main header  -->
    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Employees</h2>
        </div>
    </div>

    <!-- content  -->
    <div class="wrap-table100">

        <!-- Employee details table  -->

        <table id="example" class="table100 ver1 m-b-110 table-striped">
            <!-- Table head  -->
            <div class="table100-head">

                <thead>
                    <tr class="row100 head">
                        <th>Employee Name</th>
                        <th>Employee Address</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Positions</th>
                        <th class="text-center" colspan=2>Actions</th>
                    </tr>
                </thead>
            </div>

            <!-- Table body  -->
            <div class="table100-body js-pscroll">

                <tbody>
                    @foreach($employees as $emp)
                    <tr class="row100 body">
                        <td class="user_name">{{$emp->user_name}}</td>
                        <td class="address">{{$emp->address}}</td>
                        <td class="email">{{$emp->email}}</td>
                        <td class="phone_no">{{$emp->phone_no}}</td>

                        <td class="">
                            @php
                            $empPositions = $emp->positions->map(function ($pos) {
                            return $pos->description;
                            });
                            @endphp
                            {{ implode(", ", $empPositions->toArray()) }}
                        </td>
                        <td>
                            <!-- Button trigger modal for edit-->
                            <a type="button" class="m-r-15 text-muted edit" data-toggle="modal"
                                data-userid="{{$emp->user_id}}" data-target="#update">
                                <i class="fa fa-edit" id="edit"></i>
                            </a>
                        </td>
                        <td>
                            <a type="button" class="m-r-15 text-muted delete" data-toggle="modal"
                                data-userid="{{$emp->user_id}}" data-target="#exampleModal1">
                                <i class="fa fa-trash" id="delete"></i>
                            </a>
                        </td>
                        <!-- <td class="text-center">
                            
                            <a type="button" class="m-r-15 text-muted edit" data-toggle="modal" title="Edit"
                                data-userid="{{$emp->user_id}}" data-target="#exampleModal">
                                <i class="fa fa-edit" id="edit"></i>
                            </a>
                        </td>
                        <td class="text-center">
                           
                            <a type="button" class="m-r-15 text-muted delete" data-toggle="modal"
                                data-userid="{{$emp->user_id}}" title="Delete" data-target="#exampleModal1">
                                <i class="fa fa-trash" id="delete"></i>
                            </a>
                        </td> -->
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
                <h1 class="modal-title"> Edit Emeployee Details</h1>
                <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>


            <form role="form" method="post" action="{{route('customerUpdate')}}">
                {{csrf_field()}}

                <input type="text" hidden class="col-sm-9 form-control" id="user_id" name="user_id" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <lable>Customer name</lable>
                        <input type="text" id="user_name" name="user_name" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <lable>Address</lable>
                        <input type="text" id="address" name="address" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <lable>Contact number</lable>
                        <input type="tel" id="phone_no" value="" name="phone_no" class="form-control"
                            pattern="[0-9]{3} [0-9]{7}">
                        <small>Format: 011 8645678</small>
                    </div>
                    <div class="form-group">
                        <lable>Email</lable>
                        <input type="email" id="email" name="email" class="form-control">
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
    var deleteEmployeeId;

    $('.delete').on('click', function() {
        deleteEmployeeId = $(this).data('userid');
    });

    $('.confirm-delete').on('click', function() {
        window.location.replace("/deleteUser/" + deleteEmployeeId);
    });

    $('.cancel-delete').on('click', function() {
        deleteEmployeeId = undefined;
    });

    $('.edit').on('click', function() {
        var _this = $(this).parents('tr');
        var userId = $(this).data('userid');

        $('#user_id').val(userId);
        $('#user_name').val(_this.find('.user_name').text());
        $('#address').val(_this.find('.address').text());
        $('#phone_no').val(_this.find('.phone_no').text());
        $('#email').val(_this.find('.email').text());
    });
});
</script>
@endpush