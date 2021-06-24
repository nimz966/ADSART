@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add
            new customer
        </button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <input type="tel" id="phone" class="form-control" placeholder="Enter contact number" pattern="[0-9]{3} [0-9]{7}">
                                <small>Format: 011 8645678</small>
                            </div>

                            <div class="form-group">
                                <lable>Email</lable>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>


                            <button type="submit" class="btn btn-info">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div>
                <h2 class="row justify-content-center">Customer Details</h2>
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
                    <div class="col justify-content-end">
                        Search <input type="search">
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center mt-3">
            <table class="table table-striped w-85 ml-3">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection('content')