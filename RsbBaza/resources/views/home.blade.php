@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top: 150px">

            <a href="{{ route('team') }}" role="button" class="btn btn-outline-danger btn-lg" style="width: 300px; height: 100px; padding-top:35px;">Igracki kadar</a>
            <div style="width:20px; height:auto; display:inline-block;"></div>
            <a href="{{ route('transfers') }}" role="button" class="btn btn-outline-danger btn-lg" style="width: 300px; height: 100px; padding-top:35px;">Transferi</a>
        </div>
    </div>
</div>
@endsection
