@extends('layouts.app')

@section('title', 'RSB baza - Dodaj igraca')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Dodaj novog igraca u bazu</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('players.store') }}" method="post" enctype="multipart/form-data">
                @include('players.partials.form')
                <div style="padding-top: 20px"/>
                <button type="submit" class="btn btn-dark" style="width: 140px">Dodaj</button>
            </form>
        </div>
    </div>
@endsection