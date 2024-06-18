@extends('layout')
@section('content')
<main>
    <h1>Accomodatie overzicht</h1>
    <p>Hier is een overzicht met alle Accomodaties.</p>
    <table>
      <tbody>
        <tr>
            <th>type</th>
            <th>aantal personen</th>
            <th>kosten per nacht</th>
            <th>informatie</th>
            <th>faciliteiten</th>
            <th>foto</th>
        </tr>
        @foreach($accomodaties as $accomodatie)
        <tr>
            <td>{{$accomodatie['type']}}</td>
            <td>{{$accomodatie['aantalPersonen']}}</td>
            <td>{{$accomodatie['kostenPerNacht']}}</td>
            <td>{{$accomodatie['informatie']}}</td>
            <td>{{$accomodatie['facilities']}}</td>
            <td>{{$accomodatie['image']}}</td>
        </tr>
        @endforeach
        <tr>
            <th colspan="7"><button href="#">+ Add new</button></th>
        </tr>
      </tbody>
    </table>
</main>
@endsection