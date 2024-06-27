@extends('layout')
@section('content')
    <main>
        <h1>Boekingen</h1>
        <p>Hier kan je een Boeking Bewerken</p>

        <form action="{{ route('boekingen.update', $boeking['id']) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="voornaam">Voornaam*</label>
            <input type="text" name="voornaam" class="form-control" value="{{ $boeking['naam'] }}" placeholder="Voornaam...">
         </div> 
         <div class="form-group">
            <label for="naam">Achternaam*</label>
            <input type="text" name="achternaam" class="form-control" value="{{ $boeking['naam'] }}" placeholder="Achternaam...">
         </div> 
         <div class="form-group email" >
            <label for="email">Email*</label>
            <input type="email" name="email" class="form-control" value="{{ $boeking['email'] }}" placeholder="Email...">
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