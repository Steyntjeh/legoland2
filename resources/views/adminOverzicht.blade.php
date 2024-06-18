@extends('layout')
@section('content')
<main>
<h1>Admins</h1>
        <p>Hier is een overzicht met alle admins.</p>
        <table class="tableAdmin">
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
            <tr>
                <th colspan="2"><a href="/register"><button>+ Add new</button></a></th>
            </tr>
            </tbody>
        </table>
</main>
@endsection