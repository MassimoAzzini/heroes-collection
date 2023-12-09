@extends('layouts.admin')

@section('content')
    <h1 class="mb-4 text-center text-success fw-bold mt-4">Dungeons & Dragons Characters</h1>

    <table class="table">
        <thead>

            <tr>
                <th scope="col">NOME</th>
                <th scope="col">CA</th>
                <th scope="col">FOR</th>
                <th scope="col">DES</th>
                <th scope="col">COS</th>
                <th scope="col">INT</th>
                <th scope="col">SAG</th>
                <th scope="col">CAR</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($heroes as $hero)
                <tr>
                    <th scope="row" class=" text-capitalize ">{{ $hero->name }}</th>
                    <td>{{ $hero->armor_class }}</td>
                    <td>{{ $hero->strength }}</td>
                    <td>{{ $hero->dexterity }}</td>
                    <td>{{ $hero->constitution }}</td>
                    <td>{{ $hero->intelligence }}</td>
                    <td>{{ $hero->wisdom }}</td>
                    <td>{{ $hero->charism }}</td>
                    <td>
                        <a href="{{ route('admin.heroes.show', $hero) }}" class="btn btn-success">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.heroes.edit', $hero) }}" class="btn btn-warning">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        @include('partials.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $heroes->links() }}
@endsection
