@extends('layout')
@section('content')
    <main>
        <h1>Accomodaties</h1>
        <p>Nieuwe Accommodatie toevoegen</p>

        <form action="{{ route('accomodaties.store') }}" method="post">
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
            <textarea type="text" name="informatie" class="form-control" placeholder="Informatie..."></textarea>
         </div>
         <div class="form-group">
            <label for="facilities">Faciliteiten*</label>
            <textarea type="text" name="facilities" class="form-control" placeholder="Faciliteiten..."></textarea>
         </div>
         <div class="form-group">
            <label for="imageUrl">Foto url*</label>
            <input type="text" name="imageUrl" class="form-control" placeholder="Foto url...">
         </div>
         <button type="submit" class="btn btn-primary">Opslaan</button>
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