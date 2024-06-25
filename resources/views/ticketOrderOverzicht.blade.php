@extends('layout')
@section('content')
    <main>
        <h1>Ticket Bestellingen</h1>
        <p>Hier is een overzicht met alle ticket bestellingen.</p>
        <table>
        <tbody>
            <tr>
                <th>Order nummer</th>
                <th>Ingeplande datum</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Bericht</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($ticketOrders as $ticketOrder)
                <tr>
                    <td>{{$ticketOrder['orderNummer']}}</td>
                    <td>{{$ticketOrder['ingeplandeDatum']}}</td>
                    <td>{{$ticketOrder['voornaam']}}</td>
                    <td>{{$ticketOrder['achternaam']}}</td>
                    <td>{{$ticketOrder['Email']}}</td>
                    <td>{{$ticketOrder['telefoonNummer']}}</td>
                    <td>{{$ticketOrder['bericht']}}</td>
                    <td>
                        <a href="{{ route('tickeOrderUpdate', $ticketOrder['id']) }}">
                            <button>
                            <span class="material-icons">edit</span>
                            </button>
                        </a>
                    </td>
                    <td>
                      <form action="{{ route('ticketOrders.destroy', $ticketOrder['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <span class="material-icons">delete</span>
                        </button>
                      </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection