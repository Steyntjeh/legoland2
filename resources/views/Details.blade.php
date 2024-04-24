@extends('layout')
@section('content')
<main>
    <section>
        @if ($attractie)
            <div class="details">
                <img src="{{$attractie['image']}}" alt="">
                <h2>{{$attractie['naamAttractie']}}</h2>
                <p>{{$attractie['informatie']}}</p>
            </div>
        @else
            <p>Attractie niet gevonden.</p>
        @endif

    </section>    
</main>    
@endsection