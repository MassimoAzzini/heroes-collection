@extends('layouts.admin')

@section('content')
    <h1 class="mb-4 text-center text-success fw-bold mt-4">Crea una nuova razza</h1>

    <form action="{{ route('admin.races.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <div class="d-flex  justify-content-between">
            <div class="mb-3">
                <label for="mod_for" class="form-label">Modificatore Forza</label>
                <input type="number" class="form-control" id="mod_for" name="mod_for">
            </div>
            <div class="mb-3">
                <label for="mod_des" class="form-label">Modificatore Destrezza</label>
                <input type="number" class="form-control" id="mod_des" name="mod_des">
            </div>
            <div class="mb-3">
                <label for="mod_cos" class="form-label">Modificatore Costituzione</label>
                <input type="number" class="form-control" id="mod_cos" name="mod_cos">
            </div>
            <div class="mb-3">
                <label for="mod_int" class="form-label">Modificatore Intelligenza</label>
                <input type="number" class="form-control" id="mod_int" name="mod_int">
            </div>
            <div class="mb-3">
                <label for="mod_sag" class="form-label">Modificatore Saggezza</label>
                <input type="number" class="form-control" id="mod_sag" name="mod_sag">
            </div>
            <div class="mb-3">
                <label for="mod_car" class="form-label">Modificatore Carisma</label>
                <input type="number" class="form-control" id="mod_car" name="mod_car">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Invio</button>
    </form>
@endsection
