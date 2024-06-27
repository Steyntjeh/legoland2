@extends('layout')
@section('content')
    <main>
        <h1>Boekingen</h1>
        <p>Hier kan je een Boeking Bewerken</p>

        <form action="{{ route('boekingen.update', $boeking['id']) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="voornaam">Naam*</label>
            <input type="text" name="naam" class="form-control" value="{{ $boeking['naam'] }}" placeholder="Naam...">
         </div> 
         <div class="form-group email" >
            <label for="email">Email*</label>
            <input type="email" name="email" class="form-control" value="{{ $boeking['email'] }}" placeholder="Email...">
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