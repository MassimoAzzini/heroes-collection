@extends('layouts.guest')

@section('content')
    <h1 class="mb-5">Home</h1>
    <div>
        <p class=" my-2"> Accedi se sei già iscritto :</p>
        <a class=" mb-4 btn btn-primary " href="{{ route('login') }}">Login</a>
    </div>
    <div>
        <p class=" my-2"> Se sei un nuovo utente registrati qui :</p>
        <a class=" mb-4 btn btn-secondary " href="{{ route('register') }}">Register</a>
    </div>
@endsection
