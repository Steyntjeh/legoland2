@extends('layout')
@section('content')
    <main>
        <h1>Contacten</h1>
        <p>Hier is een overzicht met alle ticket bestellingen.</p>
        <table>
        <tbody>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Bericht</th>
                <th>Order nummer</th>
            </tr>
            @foreach($ticketOrders as $ticketOrder)
                <tr>
                    <td>{{$ticketOrder['voornaam']}}</td>
                    <td>{{$ticketOrder['achternaam']}}</td>
                    <td>{{$ticketOrder['Email']}}</td>
                    <td>{{$ticketOrder['telefoonNummer']}}</td>
                    <td>{{$ticketOrder['bericht']}}</td>
                    <td>{{$ticketOrder['orderNummer']}}</td>
                </tr>
            @endforeach 
            </tbody>
        </table>
    </main>
@endsection