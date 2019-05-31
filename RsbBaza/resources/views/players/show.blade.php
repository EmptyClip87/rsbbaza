@extends('layouts.app')

@section('title', $player->name . ' - RSB baza')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{ $player->name }}</h1>
        </div>
        <div class="col-12 pt-3">
            <p><a href="{{ route('players.edit', ['player' => $player]) }}">Izmeni</a></p>
            <form action="{{ route('players.destroy', ['player' => $player]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Ukloni iz baze</button>
            </form>
        </div>
    </div>

    <div class="col-12 pt-5">
            <div class="col-9" style="float: left">
                <table class="table col-10" >
                    <tbody>
                    <tr>
                        <td align='right' width="50px"><strong>Ime</strong></td>
                        <td align='center'>{{ $player->name }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Starost</strong></td>
                        <td align='center'>{{ $player->age }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Nacionalnost</strong></td>
                        <td align='center'>{{ $player->nationality }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Visina(cm)</strong></td>
                        <td align='center'>{{ $player->height }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Jaca noga</strong></td>
                        <td align='center'>{{ $player->preferred_foot }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Pocetak ugovora</strong></td>
                        <td align='center'>{{ $player->joined->format('Y-m-d') }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Dosao iz</strong></td>
                        <td align='center'>{{ $player->signed_from }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Istek ugovora</strong></td>
                        <td align='center'>{{ $player->contract_until->format('Y-m-d') }}</td>
                    </tr>
                    <tr>
                        <td align='right'><strong>Ukupna plata(€)</strong></td>
                        <td align='center'>{{ number_format($player->full_contract_wage, 0, ',', '.') }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-3" style="float: right; padding-left: 55px;">
            @if($player->image)
                <img src="{{ asset('storage/' . $player->image) }}" class="img-thumbnail" style="border-radius: 50%">
            @else
                <img src="/images/profile/default.png" class="img-thumbnail" style="border-radius: 50%">
            @endif
            </div>
    </div>
@endsection