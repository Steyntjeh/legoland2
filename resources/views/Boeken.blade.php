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
            <label for="kamertype">Kamertype*</label>
            <select>
                <option>
                    <select name="kamers" id="kamertype">
                        <option value="">--Please choose an option--</option>
                        <option value="vierPersonen">Huisje 4 personen</option>
                        <option value="zesPersonen">Huisje 6 personen</option>
                        <option value="tienPersonen">Huisje 10 personen</option>
                        <option value="hotel">Hotel</option>
                    </select>
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="aankomst">Aankomst datum*</label>
            <input type="date" name="aankomst" id="aankomst" class="form-control" placeholder="dd/mm/yyyy">
        </div>   
        <div class="form-group">
            <label for="vertrek">Vertrek datum*</label>
            <input type="date" name="vertrek" id="vertrek" class="form-control" placeholder="dd/mm/yyyy">
        </div>
        <div class="form-group">
            <label for="aantalPersonen">Aantal personen*</label>
            <input type="number" name="aantalPersonen" id="aantalPersonen" min="1"
                max="10" class="form-control" placeholder="0">
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