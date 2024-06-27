@extends('layout')
@section('content')
<main>
    <h1>Accomodaties</h1>

    <div class="cardSection">
        <!-- Alle accomodatie cards -->
        @foreach($accomodaties as $accomodatie)
        <div class="cards">
            <img src="{{$accomodatie['image']}}" alt="Foto's van {{$accomodatie['type']}}">
            <h2>{{$accomodatie['type']}}</h2>
            <!--<p>{{$accomodatie['informatie']}}</p> -->
            <p>Aantal personen: {{$accomodatie['aantalPersonen']}} Personen</p>
            <p>€{{$accomodatie['kostenPerNacht']}} per nacht</p>
            <a href="/accomodatie/{{$accomodatie['id']}}"><button type="submit" class="btn btn-primary">Details</button></a>
        </div>
        @endforeach
    </div>
</main>
@endsection