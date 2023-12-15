@extends('layouts.admin')

@section('content')
    <h1 class="mb-4 text-center text-success fw-bold mt-4">Dungeons & Dragons Races</h1>

    <ul class="list-group">

    </ul>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Mod FOR</th>
                <th scope="col">Mod DES</th>
                <th scope="col">Mod COS</th>
                <th scope="col">Mod INT</th>
                <th scope="col">Mod SAG</th>
                <th scope="col">Mod CAR</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($races as $race)
                <tr>
                    <th scope="row">{{ $race->ID }}</th>
                    <td>{{ $race->name }}</td>
                    <td>{{ $race->description }}</td>
                    <td>{{ $race->mod_for }}</td>
                    <td>{{ $race->mod_des }}</td>
                    <td>{{ $race->mod_cos }}</td>
                    <td>{{ $race->mod_int }}</td>
                    <td>{{ $race->mod_sag }}</td>
                    <td>{{ $race->mod_car }}</td>
                    <td>
                        <form action="{{ route('admin.races.destroy', $race) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p class="mt-4">Crea una nuova razza :</p>
    <a href="{{ route('admin.races.create') }}" class="btn btn-primary">Crea</a>
@endsection
