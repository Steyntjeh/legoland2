@extends('layout')
@section('content')
    <main>
        <h1>Accomodaties</h1>
        <p>@isset($attractie) Attractie Bewerken @else Nieuwe Attractie @endisset</p>

        <form action="@isset($attractie) {{ route('attracties.update', $attractie->id) }} @else {{ route('attracties.store') }} @endisset" method="post">
         @csrf
         @isset($attractie)
            @method('PUT')
         @endisset
         <div class="form-group">
            <label for="naamAttractie">Naam Attractie*</label>
            <input type="text" name="naamAttractie" class="form-control" value="{{ old('naamAttractie', $accomodatie['naamAttractie'] ?? '') }}" placeholder="Type...">
         </div> 
         <div class="form-group email" >
            <label for="tijdsDuur">Duur*</label>
            <input type="text" name="tijdsDuur" class="form-control" value="{{ old('tijdsDuur', $accomodatie['tijdsDuur'] ?? '') }}" placeholder="Aantal Personen...">
         </div>
         <div class="form-group">
            <label for="informatie">Informatie*</label>
            <input type="text" name="informatie" class="form-control" value="{{ old('informatie', $accomodatie['informatie'] ?? '') }}" placeholder="Kosten per nacht...">
         </div>
         <div class="form-group">
            <label for="lengte">Lengte*</label>
            <input type="text" name="lengte" class="form-control" value="{{ old('lengte', $accomodatie['lengte'] ?? '') }}" placeholder="Informatie...">
         </div>
         <div class="form-group">
            <label for="imageUrl">Foto url*</label>
            <input type="text" name="imageUrl" class="form-control" value="{{ old('image', $accomodatie['image'] ?? '') }}" placeholder="Foto url...">
         </div>
         <div class="form-group">
            <label for="minimaleLengte">Minimale Lengte*</label>
            <input type="text" name="minimaleLengte" class="form-control" value="{{ old('minimaleLengte', $accomodatie['minimaleLengte'] ?? '') }}" placeholder="Faciliteiten...">
         </div>
         <button type="submit" class="btn btn-primary">@isset($accomodatie) Bijwerken @else Opslaan @endisset</button>
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