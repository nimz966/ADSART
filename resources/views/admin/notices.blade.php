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
                                <textarea class="form-control" placeholder="Enter your message here... " rows="10"
                                    cols="5"></textarea>
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

        <div class="wrap-table100">

            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8 mb-4 mt-4">

                        Show <select>
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>75</option>
                        </select> entries

                    </div>
                    <div class="col-sm-4 mb-4 mt-4">
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
                                <th class="cell100 column1">Notice</th>
                                <th class="cell100 column2">Published Date and Time</th>
                                <th class="cell100 column3"></th>
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
                                <td class="cell100 column3">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item ml-5" data-toggle="tooltip" data-placement="bottom"
                                            title="Delete"><a href="" id="delete"><i class="fa fa-trash"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')