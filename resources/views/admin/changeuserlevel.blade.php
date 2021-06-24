@extends('layout.main')

@section('content')
<div class="container-fluid">

    <div class="container mt-3 col-8">

        <h2 class="row justify-content-center mt-3">Change User Level</h2>

        <div class="row justify-content-center mt-3">
            <form>
                <div class="form-group ">
                    <lable>Employee Name</lable>
                    <select class="form-control">
                        <option></option>
                    </select>
                </div>
                <div class="form-group">
                    <lable>User Level</lable>
                    <select class="form-control">
                        <option>Temporary</option>
                        <option>Permanent</option>

                    </select>
                </div>
                <div>
                    <a href="#" data-dismiss="modal" class="btn btn-primary">Change</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection('content')