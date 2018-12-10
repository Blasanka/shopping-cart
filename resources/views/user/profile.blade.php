@extends('layout.layout')
@section('content')
<div class="row">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="col-md-4 col-md-offset-4">
        <h1>User profile</h1>
    </div>
</div>
@endsection