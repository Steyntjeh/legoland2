@extends('layout')
@section('content')
    <main>
        <h1>Ticket overzicht</h1>
        <p>Hier is een overzicht met alle ticketsoorten.</p>
        <table>
        <tbody>
            <tr>
                <th>Ticket prijs</th>
                <th>Ticket soort</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket['ticketPrijs']}}</td>
                    <td>{{$ticket['soortTicket']}}</td>
                    <td><a href="/ticketsForm"><button>Edit</button></a></td>
                    <td><a href="/ticketsOverzicht"><button>Delete</button></a></td>
                </tr>
            @endforeach 
                <tr>
                    <th colspan="4"><button href="#">+ Add new</button></th>
                </tr>
            </tbody>
        </table>
    </main>
@endsection