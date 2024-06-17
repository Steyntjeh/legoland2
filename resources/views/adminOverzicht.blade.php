@extends('layout')
@section('content')
<main>
<h1>Admins</h1>
        <p>Hier is een overzicht met alle admins.</p>
        <table>
        <tbody>
            <tr>
                <th>Naam</th>
                <th>Email</th>
            </tr>
            @foreach($admins as $admin)
                <tr>
                    <td>{{$admin['name']}}</td>
                    <td>{{$admin['email']}}</td>
                </tr>
            @endforeach 
            </tbody>
        </table>
</main>
@endsection