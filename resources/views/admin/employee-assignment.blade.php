@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">
        <!-- Main heading  -->
        <h2 class="row justify-content-center mt-3">Event:</h2>

        <div class="row">
            <!-- Select employees name for positions  -->
            <div class="col-6">
                <div class="form-group">
                    <lable>position</lable>
                    <select name="Select Status" class="form-control">
                        <option></option>
                        <option></option>

                    </select>
                </div>
            </div>

            <!-- selected employees table  -->
            <div class="col-6">
                <div class="row justify-content-center mt-3">
                    <table class=" table table-striped w-100">
                        <!-- Table head  -->
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Employee Name</th>
                            </tr>
                        </thead>

                        <!-- Table body  -->
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Inform button  -->
                <a href="asignemployee.php" class="btn btn-primary mt-3 ml-3">Inform Team</a>
            </div>
        </div>
    </div>
</div>
@endsection('content')