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
                    <td><button>Edit</button></td>
                    <td><button>Delete</button></td>
                </tr>
            @endforeach 
                <tr>
                    <th><button href="#">+ Add new</button></th>
                </tr>
            </tbody>
        </table>
    </main>
@endsection