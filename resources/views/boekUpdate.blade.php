@extends('layout')
@section('content')
    <main>
        <h1>Boekingen</h1>
        <p>Hier kan je een Boeking Bewerken</p>

        <form action="{{ route('boekingen.update', $boeking['id']) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="naam">Naam*</label>
            <input type="text" name="naam" class="form-control" value="{{ $boeking['naam'] }}" placeholder="Naam...">
         </div> 
         <div class="form-group email" >
            <label for="email">Email*</label>
            <input type="email" name="email" class="form-control" value="{{ $boeking['email'] }}" placeholder="Email...">
         </div>
         <div class="form-group">
            <label for="telefoonNummer">Telefoonnummer*</label>
            <input type="number" name="telefoonNummer" class="form-control" value="{{ $boeking['telefoonNummer'] }}" placeholder="Telefoonnummer...">
         </div>
         <div class="form-group">
            <label for="kamerType">Kamertype*</label>
            <input type="text" name="kamerType" class="form-control" value="{{ $boeking['kamerType'] }}" placeholder="Type...">
         </div>
         <div class="form-group">
            <label for="aankomst">Aankomst*</label>
            <input type="date" name="aankomst" class="form-control" value="{{ $boeking['aankomst'] }}" placeholder="Aankomst...">
         </div>
         <div class="form-group">
            <label for="vertrek">Vertrek*</label>
            <input type="date" name="vertrek" class="form-control" value="{{ $boeking['vertrek'] }}" placeholder="Vertrek...">
         </div>
         <div class="form-group">
            <label for="aantalPersonen">Aantal Personen*</label>
            <input type="text" name="aantalPersonen" class="form-control" value="{{ $boeking['aantalPersonen'] }}" placeholder="Aantal Personen..">
         </div>
         <button type="submit" class="btn btn-primary">Bijwerken</button>
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
     </form>
    </main>
@endsection