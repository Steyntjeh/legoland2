@extends('layout')
@section('content')
<main>
    <section>
        <h1>Attracties</h1>
        <div class="bannerComingSoon">
            <h1 class="h1ComingSoon">Coming Soon...</h1>
        </div>
        <div class="cardSection">
        <!-- Alle attractie cards -->
        @foreach($attracties as $attractie)
        <div class="cards">
            <img src="{{$attractie['image']}}" alt="">
            <h2>{{$attractie['naamAttractie']}}</h2>
            <!--<p>{{$attractie['informatie']}}</p> -->
            <p>Minimale lengte: {{$attractie['minimaleLengte']}} meter</p>
            <p class="informatie">{{$attractie['informatie']}}</p>
        </div>
        @endforeach
    </div>
    </section>    
</main>    
@endsection    