@extends('layout')
@section('content')
    <main>
        <h1>Attractie overzicht</h1>
        <p>Hier is een overzicht met alle attracties.</p>
        <table>
        <tbody>
            <tr>
                <th>Naam Attractie</th>
                <th>Tijdsduur</th>
                <th>Informatie</th>
                <th>Lengte</th>
                <th>Image url</th>
                <th>Minimale lengte</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($attracties as $attractie)
                <tr>
                    <td>{{$attractie['naamAttractie']}}</td>
                    <td>{{$attractie['tijdsDuur']}}</td>
                    <td>{{$attractie['informatie']}}</td>
                    <td>{{$attractie['lengte']}}</td>
                    <td>{{$attractie['image']}}</td>
                    <td>{{$attractie['minimaleLengte']}}</td>
                    <td><a href="{{ route('attractieUpdate', $attractie['id']) }}"><button>Edit</button></a></td>
                    <td>
                      <form action="{{ route('attracties.destroy', $attractie['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
            @endforeach 
                <tr>
                    <th colspan="7"><a href="{{ route('attractieForm') }}"><button>+ Add new</button></a></th>
                </tr>
            </tbody>
        </table>
    </main>
@endsection