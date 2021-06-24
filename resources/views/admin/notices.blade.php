@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">
        <a data-toggle="modal" href="#myModal" class="btn btn-primary">Create Notice</a>

        <!-- create notice modal -->
        <div class="modal fade bd-example-modal-lg" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Notice</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="container"></div>
                    <div class="modal-body">
                        <div class="form-floating">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Enter your message here... " rows="10" cols="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
                        <a href="" class="btn btn-primary">Publish</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end create notice modal -->

        <div>
            <h2 class="row justify-content-center mt-3">Special Notices</h2>
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

            </div>
        </div>

        <div class=" row justify-content-center mt-3 ml-1">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Notice</th>
                        <th>Published Date and Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection('content')