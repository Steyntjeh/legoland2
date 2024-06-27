@extends('layout')
@section('content')
    <main>
        <h1>Attracties</h1>
        <p>Hier kan je een ticketsoort Bewerken</p>

        <form action="{{ route('tickets.update', $ticket['id']) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="ticketPrijs">Ticketprijs*</label>
            <input type="number" name="ticketPrijs" class="form-control" value="{{ $ticket['ticketPrijs'] }}" placeholder="Ticketprijs...">
         </div> 
         <div class="form-group" >
            <label for="soortTicket">Soort ticket*</label>
            <input type="text" name="soortTicket" class="form-control" value="{{ $ticket['soortTicket'] }}" placeholder="Soort ticket...">
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