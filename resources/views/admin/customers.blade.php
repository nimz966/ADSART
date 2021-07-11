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
                            <th class="cell100 column1">Name</th>
                            <th class="cell100 column2">Address</th>
                            <th class="cell100 column3">Telephone</th>
                            <th class="cell100 column4">Email</th>
                            <th class="cell100 column5"></th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="table100-body js-pscroll">
                <table>
                    <tbody>

                        @foreach($tasks as $task)
                        <tr class="row100 body">
                            <td class="cell100 column1">{{$task->user_name}}</td>
                            <td class="cell100 column2">{{$task->address}}</td>
                            <td class="cell100 column3">{{$task->phone_no}}</td>
                            <td class="cell100 column4">{{$task->email}}</td>
                            <td class="cell100 column5">
                                <ul class="list-inline m-0">
                                    <!-- Button trigger modal for edit-->
                                    <li class="list-inline-item" data-toggle="modal" data-placement="bottom"
                                        title="Edit" data-target="#exampleModal">
                                        <a id="edit"><i class="fa fa-edit"></i></a>

                                    </li>

                                    <!-- modal -->
                                    <div id="exampleModal" class="modal fade bd-example-modal-lg">
                                        <!-- modal-dialog -->
                                        <div class="modal-dialog" role="document">
                                            <!--modal-content -->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title"> Edit Customer Details</h1>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>

                                                <div class="modal-body">
                                                    <form role="form" method="post" action="">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="form-group">
                                                            <lable>Customer name</lable>
                                                            <input type="text" name="user_name" class="form-control"
                                                                value="" />
                                                        </div>

                                                        <div class="form-group">
                                                            <lable>Address</lable>
                                                            <input type="text" name="address" class="form-control"
                                                                value="" />
                                                        </div>

                                                        <div class="form-group">
                                                            <lable>Contact number</lable>
                                                            <input type="tel" id="phone" name="phone_no"
                                                                class="form-control" pattern="[0-9]{3} [0-9]{7}"
                                                                value="" />
                                                            <small>Format: 011 8645678</small>
                                                        </div>

                                                        <div class="form-group">
                                                            <lable>Email</lable>
                                                            <input type="email" name="email" class="form-control"
                                                                value="" />
                                                        </div>

                                                        <div class="form-group">
                                                            <lable>Password</lable>
                                                            <input type="password" class="form-control">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="form-group">
                                                                <div>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        Changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button trigger modal for delete-->
                                    <li class="list-inline-item" data-toggle="modal" data-placement="bottom"
                                        title="Delete" data-target="#exampleModal1"><a id="delete"><i
                                                class="fa fa-trash"></i></a>
                                    </li>

                                    <!-- Modal for delete -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    Are you sure that you want to permanently delete this record ?
                                                </div>

                                                <div class="modal-footer">
                                                    <a href="/deleteUser/{{$task->user_id}}" type="button"
                                                        class="btn btn-primary btn-sm">Yes </a>
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
                </table>
            </div>
        </div>
    </div>
</div>

@endsection('content')