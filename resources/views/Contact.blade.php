@extends('layout')
@section('content')
<main>
    <h1>Contact</h1>

    <form action="/contact/insert" method="post">
        @csrf
        <div class="form-group">
            <label for="voornaam">Naam*</label>
            <input type="text" name="voornaam" id="voornaam" class="form-control" placeholder="Voornaam...">
            <input type="text" name="achternaam" id="achternaam" class="form-control" placeholder="Achternaam...">
        </div> 
        <div class="form-group email" >
            <label for="Email">Email*</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email...">
        </div>
        <div class="form-group">
            <label for="telefoonNummer">TelefoonNummer*</label>
            <input type="tel" name="telefoonNummer" id="telefoonnummer" class="form-control" placeholder="Telefoonnummer...">
        </div>
        <div class="form-group">
            <label for="orderNummer">Ordernummer*</label>
            <input type="text" name="orderNummer" id="orderNummer" class="form-control" placeholder="Ordernummer...">
        </div>
        <div class="form-group">
            <label for="bericht">Bericht*</label>
            <textarea name="bericht" id="bericht" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Verzenden</button>
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