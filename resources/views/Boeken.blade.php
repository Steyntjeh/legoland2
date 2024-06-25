@extends('layout')
@section('content')
    <main>
        <h1>Boeken</h1>

    <form action="/boeken/insert" method="POST">
        @csrf
        <div class="form-group">
            <label for="naam">Naam*</label>
            <input type="text" name="naam" id="naam" class="form-control" placeholder="Voor en Achternaam...">
        </div>
        <div class="form-group">
            <label for="naam">Email*</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email...">
        </div>
        <div class="form-group">
            <label for="telefoonnummer">Telefoonnummer*</label>
            <input type="text" name="telefoonnummer" id="telefoonnummer" class="form-control" placeholder="Telefoonnummer...">
        </div>   
        <div class="form-group">
            <label for="kamertype">Kamertype*</label>
                <select name="kamertype" id="kamertype" class="form-control">
                    <option value="">--Please choose an option--</option>
                    <!-- alle soorten accomodaties uit de database halen -->
                    @foreach ($accomodatie as $accomodatie)
                    <option value="{{$accomodatie['type']}}" >{{$accomodatie['type']}}</option>
                    @endforeach

                </select>
        </div>
        <div class="form-group">
            <label for="aankomst">Aankomst datum*</label>
            <input type="date" name="aankomst" id="aankomst" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="dd/mm/yyyy">
        </div>   
        <div class="form-group">
            <label for="vertrek">Vertrek datum*</label>
            <input type="date" name="vertrek" id="vertrek" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="dd/mm/yyyy">
        </div>
        <div class="form-group">
            <label for="aantalPersonen">Aantal personen*</label>
            <input type="number" name="aantalPersonen" id="aantalPersonen" min="1"
                max="10" class="form-control" placeholder="0">
        </div>
        <button type="submit" class="btn btn-primary">Boeken</button>
    </form>
    <!-- controleren of er geen errors zijn, zo ja laat zien wat -->
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