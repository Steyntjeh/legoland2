@extends('layout')
@section('content')
<main>
  <section>
    <h1>Accomodaties</h1>
    <p>Hier is een overzicht met alle accomodaties.</p>
    <table>
      <thead>
        <tr>
            <th>type</th>
            <th>aantal personen</th>
            <th>kosten per nacht</th>
            <th>informatie</th>
            <th>faciliteiten</th>
            <th>foto</th>
        </tr>
      </thead>
      <tbody>
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
        <tr class="addButton">
          <td><button>+ Add New</button></td>
        </tr>
      </tbody>
    </table>
    </section>
</main>
@endsection