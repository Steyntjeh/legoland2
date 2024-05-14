@extends('layout')
@section('content')
<main>
    <section>
        @if ($accomodatie)
            <div class="details">
                <img src="{{$accomodatie['image']}}" alt="">
                <h2>{{$accomodatie['type']}}</h2>
                <p>aantal personen: {{$accomodatie['aantalPersonen']}}</p>
                <p>{{$accomodatie['informatie']}}</p>
                <p>faciliteiten: {{$accomodatie['facilities']}}</p>
                <p>kosten per nacht: {{$accomodatie['kostenPerNacht']}}</p>
                <p>Bekijk <a href="/accomodatie">hier</a> de andere accomodaties</p>
            </div>
        @else
            <p>Accomodatie niet gevonden.</p>
        @endif

    </section>    
</main>    
@endsection