@extends('layout')
@section('content')
    <main>
        <h1>Accomodaties</h1>
        <p>Nieuwe Attractie toevoegen</p>

        <form action="{{ route('attracties.store') }}" method="post">
         @csrf
         <div class="form-group">
            <label for="naamAttractie">Naam Attractie*</label>
            <input type="text" name="naamAttractie" class="form-control" placeholder="Naam Attractie...">
         </div> 
         <div class="form-group email" >
            <label for="tijdsDuur">Duur*</label>
            <input type="text" name="tijdsDuur" class="form-control" placeholder="Duur...">
         </div>
         <div class="form-group">
            <label for="informatie">Informatie*</label>
            <textarea type="text" name="informatie" class="form-control" placeholder="Informatie..."></textarea>
         </div>
         <div class="form-group">
            <label for="lengte">Lengte*</label>
            <input type="text" name="lengte" class="form-control" placeholder="Lengte...">
         </div>
         <div class="form-group">
            <label for="imageUrl">Foto url*</label>
            <input type="text" name="imageUrl" class="form-control" placeholder="Foto url...">
         </div>
         <div class="form-group">
            <label for="minimaleLengte">Minimale Lengte*</label>
            <input type="text" name="minimaleLengte" class="form-control" placeholder="Minimale Lengte...">
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