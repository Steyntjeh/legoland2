@extends('layout')
@section('content')
    <main>
        <h1>Contacten</h1>
        <p>Hier is een overzicht met alle contacten.</p>
        <table>
        <tbody>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Bericht</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($contacten as $contact)
                <tr>
                    <td>{{$contact['voornaam']}}</td>
                    <td>{{$contact['achternaam']}}</td>
                    <td>{{$contact['Email']}}</td>
                    <td>{{$contact['telefoonNummer']}}</td>
                    <td>{{$contact['bericht']}}</td>
                    <td><a href="/contactForm"><button>Edit</button></a></td>
                    <td><a href="/contactOverzicht"><button>Delete</button></a></td>
                </tr>
            @endforeach
            <tr>
                <th colspan="7"><a href="/contactForm"><button>+ add new</button></a></th>
            </tr>
            </tbody>
        </table>
@endsection    