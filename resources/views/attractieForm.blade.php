@extends('layout')
@section('content')
    <main>
        <h1>Attracties</h1>
        <p>Hier kan je nieuwe attracties toevoegen</p>

        <form action="/attractieOverzicht" method="post">
         @csrf
         <div class="form-group">
            <label for="naam">naam*</label>
            <input type="text" name="naamAttractie" class="form-control" placeholder="Naam attractie...">
         </div> 
         <div class="form-group">
            <label for="tijdsDuur">Tijdsduur*</label>
            <input type="text" name="tijdsDuur" class="form-control" placeholder="Tijdsduur...">
         </div>
         <div class="form-group">
            <label for="informatie">Informatie*</label>
            <input type="text" name="informatie" class="form-control" placeholder="Informatie...">
         </div>
         <div class="form-group">
            <label for="lengte">Lengte*</label>
            <input type="text" name="lengte" class="form-control" placeholder="Lengte...">
         </div>
         <div class="form-group">
            <label for="image">Image*</label>
            <input type="text" name="image" class="form-control" placeholder="Image...">
         </div>
         <div class="form-group">
            <label for="minimaleLengte">Minimale lengte*</label>
            <input type="number" name="minimaleLengte" class="form-control" placeholder="Minimale lengte...">
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