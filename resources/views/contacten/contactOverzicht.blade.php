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
                    <td>
                        <a href="{{ route('attractieUpdate', $attractie['id']) }}">
                            <button>
                            <span class="material-icons">edit</span>
                            </button>
                        </a>
                    </td>
                    <td>
                      <form action="{{ route('attracties.destroy', $attractie['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <span class="material-icons">delete</span>
                        </button>
                      </form>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
@endsection    