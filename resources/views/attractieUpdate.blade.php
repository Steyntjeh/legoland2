@extends('layout')
@section('content')
    <main>
        <h1>Attracties</h1>
        <p>Hier kan je een Attractie Bewerken</p>

        <form action="{{ route('attracties.update', $attractie['id']) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="naamAttractie">Naam Attractie*</label>
            <input type="text" name="naamAttractie" class="form-control" value="{{ $attractie['naamAttractie'] }}" placeholder="Naam Attractie...">
         </div> 
         <div class="form-group email" >
            <label for="tijdsDuur">Duur*</label>
            <input type="text" name="tijdsDuur" class="form-control" value="{{ $attractie['tijdsDuur'] }}" placeholder="Duur...">
         </div>
         <div class="form-group">
            <label for="informatie">Informatie*</label>
            <input type="text" name="informatie" class="form-control" value="{{ $attractie['informatie'] }}" placeholder="Informatie...">
         </div>
         <div class="form-group">
            <label for="lengte">Lengte*</label>
            <input type="text" name="lengte" class="form-control" value="{{ $attractie['lengte'] }}" placeholder="Lengte...">
         </div>
         <div class="form-group">
            <label for="imageUrl">Foto url*</label>
            <input type="text" name="imageUrl" class="form-control" value="{{ $attractie['image'] }}" placeholder="Foto url...">
         </div>
         <div class="form-group">
            <label for="minimaleLengte">Minimale Lengte*</label>
            <input type="text" name="minimaleLengte" class="form-control" value="{{ $attractie['minimaleLengte'] }}" placeholder="Minimale Lengte...">
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