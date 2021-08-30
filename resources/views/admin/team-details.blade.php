@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">

        <!-- Event Name Heading -->
        <div class="row justify-content-center mt-3">
            <h2 class="row justify-content-center mt-3">Event: {{ $event->event_name }}</h2>
        </div>

        <!-- Sub Heading -->
        <div class="row justify-content-center mb-3">
            <h4 class="row justify-content-center mt-3">Select the number of members for each position </h4>
        </div>

        <form action="/event/{{$event->event_id}}/assign" method="post">
            {{csrf_field()}}
            <div class="row pt-3">
                @foreach($positions as $position)
                <div class="col-4">
                    <div class="form-check">
                        <lable>{{$position->description}}</lable>
                        <select id="{{$position->position_id}}" name="position[{{$position->position_id}}][]"
                            class="form-control position" multiple>
                            @foreach($position->users as $user)
                            <option value="{{$user->user_id}}"
                                {{isset($userPosition[$position->position_id]) && in_array($user->user_id, $userPosition[$position->position_id]) ? 'selected' : ''}}>
                                {{$user->user_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endforeach
                <div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mt-3 ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')

@push('scripts')
<script>
// var selectedUsers = []
// $(document).ready(() => {
//     $('.position').on('change', function() {
//         var curId = $(this).attr('id');
//         var curVals = $(this).val();
//         curVals.forEach(function(id) {
//             selectedUsers.push(id);
//         })

//         $('.position').each((key, element) => {

//             $(element).children('option').each((i, opt) => {

//                 var optVal = $(opt).val();

//                 if (curId == element.id) return;

//                 if (selectedUsers.includes(optVal)) {
//                     $(opt).attr('disabled', 'disabled')
//                 } else {
//                     $(opt).attr('disabled', false)
//                     selectedUsers = selectedUsers.filter(id => (id !== optVal));
//                 }
//             })
//         });

//     })
// })
</script>
@endpush