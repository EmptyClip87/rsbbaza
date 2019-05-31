@extends('layouts.app')

@section('title', $player->name . ' - RSB baza')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Izmena podataka</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('players.update', ['player' => $player]) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @include('players.partials.form')

                <div style="width:20px; height:auto; display:inline-block;"></div>
                <button type="submit" class="btn btn-danger" style="width: 150px; height: 80px; font-size: 25px; float: right;">Sacuvaj</button>
            </form>
        </div>
    </div>
@endsection