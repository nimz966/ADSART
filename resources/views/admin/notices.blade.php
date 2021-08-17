@extends('layout.main')

@section('content')
<div class="container-fluid">

    <a data-toggle="modal" href="#myModal" class="btn btn-primary">Create Notice</a>

    <!-- create notice modal -->
    <div class="modal fade bd-example-modal-lg" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal head -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Notice</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>

                <!-- Modal body -->
                <form action="/addNotice" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <div class="form-floating">
                            <div class="form-floating">
                                <textarea class="form-control" name="description"
                                    placeholder="Enter your message here... " rows="10" cols="5"></textarea>
                            </div>
                            <div class="form-group">
                                <lable>user id</lable>
                                <input type="text" name="user_id" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end create notice modal -->

    <!-- Main header  -->
    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Notices</h2>
        </div>
    </div>

    <!--wrap table  -->
    <div class="wrap-table100">

        <!-- Notices detail table -->
        <table class="table100 ver1 m-b-110 table-striped" id="example">
            <!-- Table head -->
            <div class="table100-head ">

                <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Notice</th>
                        <th class="cell100 column2">Published Date and Time</th>
                    </tr>
                </thead>

            </div>

            <!-- Table body -->
            <div class="table100-body js-pscroll">

                <tbody>
                    @foreach($tasks as $task)
                    <tr class="row100 body">
                        <td class="cell100 column1">{{$task->description}}</td>
                        <td class="cell100 column2">{{$task->created_at	}}
                            <ul class="list-inline m-0">
                                <!-- Button trigger modal for delete-->
                                <li class="list-inline-item float-right" data-toggle="modal" data-placement="bottom"
                                    title="Delete" data-target="#exampleModal"><a id="delete"><i
                                            class="fa fa-trash"></i></a>
                                </li>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Are you sure that you want to permanently delete this record ?
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/deleteNotice/{{$task->notice_id}}" type="button"
                                                    class="btn btn-primary btn-sm">Yes</a>
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