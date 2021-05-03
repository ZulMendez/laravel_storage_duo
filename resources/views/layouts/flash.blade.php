@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- message warning --}}
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif