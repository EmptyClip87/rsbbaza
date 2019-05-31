@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top: 150px">

            <a href="{{ route('players.index') }}" type="button" class="btn btn-outline-danger btn-lg" style="width: 300px; height: 100px; line-height:80px; font-size: 25px;">Igracki kadar</a>
            <div style="width:20px; height:auto; display:inline-block;"></div>
            <a href="" type="button" class="btn btn-outline-danger btn-lg" style="width: 300px; height: 100px; line-height:80px; font-size: 25px;">Transferi</a>
        </div>
    </div>
</div>
@endsection
