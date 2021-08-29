@extends('layout.main')

@section('content')
<div class="container-fluid">

    <div class="row mt-3">
        <div id="calendar"></div>
    </div>

</div>
@endsection('content')

@push('scripts')
<script src="{{ asset('js/event.js') }}"></script>
@endpush