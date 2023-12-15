@extends('layouts.admin')

@section('content')
    <h2 class="text-center mb-3 text-black  fs-1">Crea un nuovo Hero</h2>
    <div class=" container-fluid ">
        <div class="row">
            <div class="col-6 offset-3 ">
                <form action="{{ route('admin.heroes.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="title">
                    </div>
                    <div class="mb-3">
                        <label for="background">Descrizione del prodotto</label>
                        <textarea class="form-control" id="background" name="background" style="height: 200px"></textarea>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="race_id">
                        <option value="#">Scegli la razza ...</option>
                        @foreach ($races as $race)
                            <option value="{{ $race->id }}">{{ $race->name }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="image" name="image" aria-describedby="title">
                    </div>
                    <div class="d-flex gap-3 my-2 ">
                        <div class="flex-grow-1">
                            <label for="height" class="form-label">Altezza</label>
                            <input type="number" class="form-control" id="height" name="height" step="0.1"
                                aria-describedby="title">
                        </div>
                        <div class="flex-grow-1">
                            <label for="weight" class="form-label">Peso</label>
                            <input type="number" class="form-control" id="weight" name="weight" step="0.1"
                                aria-describedby="title">
                        </div>
                    </div>
                    <div class="d-flex gap-3 my-2">
                        <div class="flex-grow-1">
                            <label for="armor_class" class="form-label">Classe armatura</label>
                            <input type="number" class="form-control" id="armor_class" name="armor_class"
                                aria-describedby="title">
                        </div>
                        <div class="flex-grow-1">
                            <label for="strength" class="form-label">Forza</label>
                            <input type="number" class="form-control" id="strength" name="strength"
                                aria-describedby="title">
                        </div>
                        <div class="flex-grow-1">
                            <label for="dexterity" class="form-label">Destrezza</label>
                            <input type="number" class="form-control" id="dexterity" name="dexterity"
                                aria-describedby="title">
                        </div>
                    </div>
                    <div class="d-flex gap-3 my-3">
                        <div class="flex-grow-1">
                            <label for="constitution" class="form-label">Costituzione</label>
                            <input type="number" class="form-control" id="constitution" name="constitution"
                                aria-describedby="title">
                        </div>
                        <div class="flex-grow-1">
                            <label for="intelligence" class="form-label">Intelligenza</label>
                            <input type="number" class="form-control" id="intelligence" name="intelligence"
                                aria-describedby="title">
                        </div>
                        <div class="flex-grow-1">
                            <label for="wisdom" class="form-label">Saggezza</label>
                            <input type="number" class="form-control" id="wisdom" name="wisdom"
                                aria-describedby="title">
                        </div>
                        <div class="flex-grow-1">
                            <label for="charism" class="form-label">Carisma</label>
                            <input type="number" class="form-control" id="charism" name="charism"
                                aria-describedby="title">
                        </div>
                    </div>

                    <div class="d-flex gap-4 my-4">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-warning">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
