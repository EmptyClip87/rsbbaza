@extends('layouts.app')

@section('title', 'RSB baza - Igracki kadar')

@section('content')
    <div class="row pt-5">
        <div class="col-12">
            <h1>Lista igraca</h1>
        </div>
    </div>
    {{--@can('create', App\Customer::class)--}}
        <div class="row">
            <div class="col-12 pt-4">
                <p><a href="{{ route('players.create') }}" role="button" class="btn btn-outline-danger">Dodaj igraca</a></p>
            </div>
        </div>
    {{--@endcan--}}
    <div class="row pt-3">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Ime</th>
                    <th scope="col">Starost</th>
                    <th scope="col">Nacionalnost</th>
                    <th scope="col">Visina(cm)</th>
                    <th scope="col">Jaca noga</th>
                    <th scope="col">Pocetak ugovora</th>
                    <th scope="col">Dosao iz</th>
                    <th scope="col">Istek ugovora</th>
                    <th scope="col">Ukupna plata(€)</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $player)
                    <tr>
                        <td>
                            <a href="{{ route('players.show', ['players' => $player]) }}">
                                {{ $player->name }}
                            </a>
                        </td>
                        <td>{{ $player->age }}</td>
                        <td>{{ $player->nationality }}</td>
                        <td>{{ $player->height }}</td>
                        <td>{{ $player->preferred_foot }}</td>
                        <td>{{ $player->joined }}</td>
                        <td>{{ $player->signed_from }}</td>
                        <td>{{ $player->contract_until }}</td>
                        <td>{{ $player->full_contract_wage }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="row">
                <div class="col-12 d-flex justify-content-center pt-3">
                    {{ $players->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
