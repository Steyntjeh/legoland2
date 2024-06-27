@extends('layout')
@section('content')
    <main>
        <h1>Tickets</h1>
        <p>Hier kan je nieuwe ticket soorten toevoegen</p>

        <form action="{{ route('tickets.store') }}" method="post">
         @csrf
         <div class="form-group">
            <label for="ticketPrijs">Ticketprijs*</label>
            <input type="number" name="ticketPrijs" class="form-control" placeholder="Ticketprijs...">
         </div> 
         <div class="form-group">
            <label for="soortTicket">Soort ticket*</label>
            <input type="text" name="soortTicket" class="form-control" placeholder="Soort ticket...">
         </div>
         <button type="submit" class="btn btn-primary">Opslaan</button>
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