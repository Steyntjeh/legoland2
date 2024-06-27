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
                    <td>
                        <a href="{{ route('tickets.ticketUpdate', $ticket['id']) }}">
                            <button>
                            <span class="material-icons">edit</span>
                            </button>
                        </a>
                    </td>
                    <td>
                      <form action="{{ route('tickets.destroy', $ticket['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <span class="material-icons">delete</span>
                        </button>
                      </form>
                    </td>
                </tr>
            @endforeach 
                <tr>
                    <th colspan="4"><button href="{{ route('tickets.ticketForm') }}">+ Add new</button></th>
                </tr>
            </tbody>
        </table>
    </main>
@endsection