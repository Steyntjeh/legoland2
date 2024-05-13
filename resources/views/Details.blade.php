@extends('layout')
@section('content')
<main>
    <section>
        @if ($attractie)
            <div class="details">
                <img src="{{$attractie['image']}}" alt="">
                <h2>{{$attractie['naamAttractie']}}</h2>
                <p>{{$attractie['informatie']}}</p>
                <p>lengte attractie: {{$attractie['lengte']}}</p>
                <p>tijdsduur attractie: {{$attractie['tijdsDuur']}}</p>
                <p>Bekijk <a href="/attracties">hier</a> de andere attracties</p>
            </div>
        @else
            <p>Attractie niet gevonden.</p>
        @endif

    </section>    
</main>    
@endsection