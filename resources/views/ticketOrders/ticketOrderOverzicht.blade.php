@extends('layout')
@section('content')
    <main>
        <h1>Ticket Bestellingen</h1>
        <p>Hier is een overzicht met alle ticket bestellingen.</p>
        <table>
        <tbody>
            <tr>
                <th>Order nummer</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Aantal tickets</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($ticketOrders as $ticketOrder)
                <tr>
                    <td>{{$ticketOrder['id']}}</td>
                    <td>{{$ticketOrder['voornaam']}}</td>
                    <td>{{$ticketOrder['achternaam']}}</td>
                    <td>{{$ticketOrder['email']}}</td>
                    <td>{{$ticketOrder['ticket_id']}}</td>
                    <td>{{$ticketOrder['quantity']}}</td>
                    <td>
                        <a href="{{ route('tickeOrderUpdate', $ticketOrder['id']) }}">
                            <button>
                            <span class="material-icons">edit</span>
                            </button>
                        </a>
                    </td>
                    <td>
                      <form action="{{ route('ticketorders.destroy', $ticketOrder['id']) }}" method="POST" style="display:inline;">
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