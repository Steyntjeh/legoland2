@extends('layout')
@section('content')
    <main>
        <h1>Accomodaties</h1>
        <p>Hier kan je nieuwe accomodaties toevoegen</p>

        <form action="/accomodatieOverzicht" method="post">
         @csrf
         <div class="form-group">
            <label for="type">Type*</label>
            <input type="text" name="type" class="form-control" placeholder="Type...">
         </div> 
         <div class="form-group email" >
            <label for="aantalPersonen">Aantal Personen*</label>
            <input type="number" name="aantalPersonen" class="form-control" placeholder="Aantal Personen...">
         </div>
         <div class="form-group">
            <label for="kostenPerNacht">Kosten per nacht*</label>
            <input type="number" name="kostenPerNacht" class="form-control" placeholder="Kosten per nacht...">
         </div>
         <div class="form-group">
            <label for="informatie">Informatie*</label>
            <input type="text" name="informatie" class="form-control" placeholder="Informatie...">
         </div>
         <div class="form-group">
            <label for="facilities">Faciliteiten*</label>
            <input type="text" name="facilities" class="form-control" placeholder="Faciliteiten...">
         </div>
         <div class="form-group">
            <label for="imageUrl">Foto url*</label>
            <input type="text" name="imageUrl" class="form-control" placeholder="Foto url...">
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
     </form>
    </main>
@endsection