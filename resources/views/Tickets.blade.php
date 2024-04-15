@extends('layout')
@section('content')
<main>
    <h1>Tickets</h1>
    <form action="/tickets/insert" method="POST">
        @csrf
        <div class="form-group">
            <label for="voornaam">Naam*</label>
            <input type="text" name="voornaam" id="voornaam" class="form-control" placeholder="Voornaam...">
            <input type="text" name="achternaam" id="achternaam" class="form-control" placeholder="Achternaam...">
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email...">
        </div>

        @foreach ($tickets as $ticket)
        <div class="form-group">
            <label for="soortTicket">{{$ticket['soortTicket']}}: €{{$ticket['ticketPrijs']}}</label>
            <input type="number" name="tickets[{{$ticket['id']}}]" id="number" class="form-control" placeholder="Aantal tickets...">
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Bestellen</button>
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
</main>    
@endsection