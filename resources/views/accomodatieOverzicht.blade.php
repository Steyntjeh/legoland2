@extends('layout')
@section('content')
<main>
    <h1>Accomodatie overzicht</h1>
    <p>Hier is een overzicht met alle Accomodaties.</p>
    @if ($message = Session::get('success'))
        <div>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <table>
      <tbody>
        <tr>
            <th>type</th>
            <th>aantal personen</th>
            <th>kosten per nacht</th>
            <th>informatie</th>
            <th>faciliteiten</th>
            <th>foto</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($accomodaties as $accomodatie)
        <tr>
            <td>{{$accomodatie['type']}}</td>
            <td>{{$accomodatie['aantalPersonen']}}</td>
            <td>{{$accomodatie['kostenPerNacht']}}</td>
            <td>{{$accomodatie['informatie']}}</td>
            <td>{{$accomodatie['facilities']}}</td>
            <td>{{$accomodatie['image']}}</td>
            <td><a href="{{ route('accomodatieUpdate', $accomodatie['id']) }}"><button>Edit</button></a></td>
            <td>
              <form action="{{ route('accomodaties.destroy', $accomodatie['id']) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <th colspan="7"><a href="{{ route('accomodatiesForm') }}"><button>+ Add new</button></a></th>
        </tr>
      </tbody>
    </table>
</main>
@endsection