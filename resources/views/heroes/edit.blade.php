@extends('layouts.main')

@section('content')
    <h3 class="text-center mb-5">Modifica hero</h3>
    <div class="container-fr">
        <form action="{{ route('heroes.update', $hero) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="title"
                    value="{{ $hero->name }}">
            </div>
            <div class="mb-3">
                <label for="background">Descrizione del prodotto</label>
                <textarea class="form-control" id="background" name="background" style="height: 200px">{{ $hero->background }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" aria-describedby="title"
                    value="{{ $hero->image }}">
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Altezza</label>
                <input type="number" class="form-control" id="height" name="height" step="0.1"
                    aria-describedby="title" value="{{ $hero->height }}">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Peso</label>
                <input type="number" class="form-control" id="weight" name="weight" step="0.1"
                    aria-describedby="title" value="{{ $hero->weight }}">
            </div>
            <div class="mb-3">
                <label for="armor_class" class="form-label">Classe armatura</label>
                <input type="number" class="form-control" id="armor_class" name="armor_class" aria-describedby="title"
                    value="{{ $hero->armor_class }}">
            </div>
            <div class="mb-3">
                <label for="strength" class="form-label">Forza</label>
                <input type="number" class="form-control" id="strength" name="strength" aria-describedby="title"
                    value="{{ $hero->strength }}">
            </div>
            <div class="mb-3">
                <label for="dexterity" class="form-label">Destrezza</label>
                <input type="number" class="form-control" id="dexterity" name="dexterity" aria-describedby="title"
                    value="{{ $hero->dexterity }}">
            </div>
            <div class="mb-3">
                <label for="constitution" class="form-label">Costituzione</label>
                <input type="number" class="form-control" id="constitution" name="constitution" aria-describedby="title"
                    value="{{ $hero->constitution }}">
            </div>
            <div class="mb-3">
                <label for="intelligence" class="form-label">Intelligenza</label>
                <input type="number" class="form-control" id="intelligence" name="intelligence" aria-describedby="title"
                    value="{{ $hero->intelligence }}">
            </div>
            <div class="mb-3">
                <label for="wisdom" class="form-label">Saggezza</label>
                <input type="number" class="form-control" id="wisdom" name="wisdom" aria-describedby="title"
                    value="{{ $hero->wisdom }}">
            </div>
            <div class="mb-3">
                <label for="charism" class="form-label">Carisma</label>
                <input type="number" class="form-control" id="charism" name="charism" aria-describedby="title"
                    value="{{ $hero->charism }}">
            </div>
            <div class="text-center">

                <button type="submit" class="btn btn-primary">Invia</button>

            </div>
        </form>
    </div>
@endsection
