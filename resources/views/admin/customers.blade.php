@extends('layout.main')

@section('content')

<div class="container-fluid">
    <div class="container mt-3 col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add
            new customer
        </button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="col-12 form-input">
                        <h2> Customer Detail Form</h2>
                        <form>

                            <div class="form-group">
                                <lable>Customer name</lable>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <lable>Address</lable>
                                <input type="text" class="form-control" placeholder="Enter Address">
                            </div>

                            <div class="form-group">
                                <lable>Contact number</lable>
                                <input type="tel" id="phone" class="form-control" placeholder="Enter contact number"
                                    pattern="[0-9]{3} [0-9]{7}">
                                <small>Format: 011 8645678</small>
                            </div>

                            <div class="form-group">
                                <lable>Email</lable>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>

                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
                            <tr class="row100 body">
                                <td class="cell100 column1"></td>
                                <td class="cell100 column2"></td>
                                <td class="cell100 column3"></td>
                                <td class="cell100 column4"></td>
                                <td class="cell100 column5">
                                    <ul class="list-inline m-0">

                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="bottom"
                                            title="Edit"><a href="" id="edit"><i class="fa fa-edit"></i></a>
                                        </li>

                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="bottom"
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