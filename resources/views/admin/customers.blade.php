@extends('layout.main')

@section('content')

<div class="container-fluid">


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalForm">
        Add New Customer
    </button>
    @if(session('status'))
    <div class="alert alert-success">{{(session('status'))}}</div>
    @endif
    <!-- Modal HTML Markup -->
    <div id="ModalForm" class="modal fade bd-example-modal-lg">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Customer Details</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="/saveTask">
                        {{csrf_field()}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <lable>Customer name</lable>
                            <input type="text" name="user_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Address</lable>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Contact number</lable>
                            <input type="tel" name="phone_no" id="phone" class="form-control"
                                pattern="[0-9]{3} [0-9]{7}">
                            <small>Format: 011 8645678</small><br>
                        </div>

                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="email" name="email" class="form-control">
                        </div>
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <!-- /.modal -->

    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Customer Details</h2>
        </div>
    </div>

    <div class="wrap-table100">


        <table id="example" class="table100 ver1 m-b-110 table-striped">
            <div class="table100-head">

                <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Name</th>
                        <th class="cell100 column2">Address</th>
                        <th class="cell100 column3">Telephone</th>
                        <th class="cell100 column4">Email</th>
                        <th class="cell100 column1">Actions</th>

                    </tr>
                </thead>

            </div>

            <div class="table100-body js-pscroll">

                <tbody>

                    @foreach($tasks as $task)

                    <tr class="row100 body">
                        <td class="user_name">{{$task->user_name}}</td>
                        <td class="address">{{$task->address}}</td>
                        <td class="phone_no">{{$task->phone_no}}</td>
                        <td class="email">{{$task->email}}</td>
                        <td>

                            <!-- Button trigger modal for edit-->
                            <a type="button" class="m-r-15 text-muted edit " data-toggle="modal"
                                data-idUpdate="'$task->user_name'" data-target="#update">
                                <i class="fa fa-edit" id="edit"></i>

                            </a>

                            <a type="button" class="m-r-15 text-muted edit" data-toggle="modal"
                                data-idUpdate="'$task->user_name'" data-target="#exampleModal1">
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
                <h1 class="modal-title"> Edit Customer Details</h1>
                <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>


            <form role="form" method="post" action="{{route('update')}}">
                {{csrf_field()}}

                <input type="text" hidden class="col-sm-9 form-control" id="id" name="id" value="">
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
                <a href="/deleteUser/{{$task->user_id}}" type="button" class="btn btn-primary btn-sm">Yes </a>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
            </div>

        </div>
    </div>
</div>
@endsection('content')