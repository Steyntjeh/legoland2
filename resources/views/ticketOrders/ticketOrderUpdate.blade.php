@extends('layout')
@section('content')
    <main>
        <h1>Boekingen</h1>
        <p>Hier kan je een Boeking Bewerken</p>

        <form action="{{ route('ticketorders.update', $ticketOrder['id']) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="voornaam">Order nummer*</label>
            <input type="number" name="orderNummer" class="form-control" value="{{ $ticketOrder['orderNummer'] }}" placeholder="Order nummer...">
         </div> 
         <div class="form-group">
            <label for="ingeplandeDatum">Ingeplande datum*</label>
            <input type="date" name="ingeplandeDatum" class="form-control" value="{{ $ticketOrder['ingeplandeDatum'] }}" placeholder="Ingeplande datum...">
         </div> 
         <div class="form-group email" >
            <label for="email">Email*</label>
            <input type="email" name="email" class="form-control" value="{{ $ticketOrder['email'] }}" placeholder="Email...">
         </div>
         <div class="form-group">
            <label for="voornaam">Voornaam*</label>
            <input type="text" name="voornaam" class="form-control" value="{{ $ticketOrder['voornaam'] }}" placeholder="Voornaam..">
         </div>
         <div class="form-group">
            <label for="achternaam">Achternaam*</label>
            <input type="text" name="achternaam" class="form-control" value="{{ $ticketOrder['achternaam'] }}" placeholder="Achternaam..">
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