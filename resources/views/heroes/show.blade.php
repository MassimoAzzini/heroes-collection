@extends('layouts.main')

@section('content')
    <h1>{{ $hero->name }}</h1>
    <div class="card" style="width: 35rem;">
        <img src="{{ $hero->image }}" class="card-img-top" alt="{{ $hero->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $hero->name }}</h5>
            <p class="card-text">{{ $hero->background }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Altezza: {{ $hero->height }} | Peso: {{ $hero->weight }}</li>
            <li class="list-group-item">CA: {{ $hero->armor_class }}</li>
            <li class="list-group-item">FOR: {{ $hero->strength }} | DES: {{ $hero->dexterity }} | COS:
                {{ $hero->constitution }} | INT: {{ $hero->intelligence }} | SAG: {{ $hero->wisdom }} | CAR:
                {{ $hero->charism }}</li>
        </ul>
        <div class="card-body">
            <a href="{{ route('heroes.edit', $hero) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
            @include('partials.delete')
        </div>
    </div>
@endsection
