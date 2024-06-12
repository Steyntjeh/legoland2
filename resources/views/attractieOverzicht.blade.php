@extends('layout')
@section('content')
    <main>
        <h1>Contacten</h1>
        <p>Hier is een overzicht met alle contact verzoeken.</p>
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
            @foreach($contacten as $contact)
                <tr>
                    <td>{{$contact['voornaam']}}</td>
                    <td>{{$contact['achternaam']}}</td>
                    <td>{{$contact['Email']}}</td>
                    <td>{{$contact['telefoonNummer']}}</td>
                    <td>{{$contact['bericht']}}</td>
                    <td>{{$contact['orderNummer']}}</td>
                </tr>
            @endforeach 
                <tr>
                    <th><button href="#">+ Add new</button></th>
                </tr>
            </tbody>
        </table>
    </main>
@endsection