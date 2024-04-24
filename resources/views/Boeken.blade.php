@extends('layout')
@section('content')
    <main>
        <h1>Boeken</h1>

    <form action="/boeken/insert" method="post">
        @csrf
        <div class="form-group">
            <label for="naam">Naam*</label>
            <input type="text" name="voornaam" id="voornaam" class="form-control" placeholder="Voor en Achternaam...">
        </div>
        <div class="form-group">
            <label for="naam">Email*</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email...">
        </div>
        <div class="form-group">
            <label for="telefoonnummer">Telefoonnummer*</label>
            <input type="tel" name="telefoonnummer" id="telefoonnummer" class="form-control" placeholder="Telefoonnummer...">
        </div>   
        <div class="form-group">
            <label for="naam">Kamertype*</label>
        </div> 
        <button type="submit" class="btn btn-primary">Boeken</button>
    </form>

    @if($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>  
    @endif
    </main>
@endsection