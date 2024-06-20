@extends('layout')
@section('content')
    <main>
        <h1>Accomodaties</h1>
        <p>Hier kan je een Accommodatie Bewerken</p>

        <form action="{{ route('accomodaties.update', $accomodatie['id']) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="type">Type*</label>
            <input type="text" name="type" class="form-control" value="{{ $accomodatie['type'] }}" placeholder="Type...">
         </div> 
         <div class="form-group email" >
            <label for="aantalPersonen">Aantal Personen*</label>
            <input type="number" name="aantalPersonen" class="form-control" value="{{ $accomodatie['aantalPersonen'] }}" placeholder="Aantal Personen...">
         </div>
         <div class="form-group">
            <label for="kostenPerNacht">Kosten per nacht*</label>
            <input type="number" name="kostenPerNacht" class="form-control" value="{{ $accomodatie['kostenPerNacht'] }}" placeholder="Kosten per nacht...">
         </div>
         <div class="form-group">
            <label for="informatie">Informatie*</label>
            <input type="text" name="informatie" class="form-control" value="{{ $accomodatie['informatie'] }}" placeholder="Informatie...">
         </div>
         <div class="form-group">
            <label for="facilities">Faciliteiten*</label>
            <input type="text" name="facilities" class="form-control" value="{{ $accomodatie['facilities'] }}" placeholder="Faciliteiten...">
         </div>
         <div class="form-group">
            <label for="imageUrl">Foto url*</label>
            <input type="text" name="imageUrl" class="form-control" value="{{ $accomodatie['image'] }}" placeholder="Foto url...">
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