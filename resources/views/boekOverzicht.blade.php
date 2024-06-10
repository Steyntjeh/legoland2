@extends('layout')
@section('content')
    <main>
        <section>
            <h1>Boekingen</h1>
            <p>Hier is een overzicht met alle boekingen.</p>
        <table>
            <tr>
                <th>Boekingnummer</th>
                <th>Naam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Kamertype</th>
                <th>Aankomst</th>
                <th>Vertrek</th>
                <th>Aantal personen</th>
            </tr>
            @foreach($boekingen as $boeking)
                <tr>
                    <td>{{$boeking['id']}}</td>
                    <td>{{$boeking['naam']}}</td>
                    <td>{{$boeking['email']}}</td>
                    <td>{{$boeking['telefoonNummer']}}</td>
                    <td>{{$boeking['kamerType']}}</td>
                    <td>{{$boeking['aankomst']}}</td>
                    <td>{{$boeking['vertrek']}}</td>
                    <td>{{$boeking['aantalPersonen']}}</td>
                </tr>
            @endforeach
        </table>
        </section>
    </main>
@endsection