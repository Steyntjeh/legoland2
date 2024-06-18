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
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($admins as $admin)
                <tr>
                    <td>{{$admin['name']}}</td>
                    <td>{{$admin['email']}}</td>
                    <td><a href="/register"><button>Edit</button></a></td>
                    <td><a href="/adminOverzicht"><button>Delete</button></a></td>
                </tr>
            @endforeach 
            <tr>
                <th colspan="4"><a href="/register"><button>+ Add new</button></a></th>
            </tr>
            </tbody>
        </table>
</main>
@endsection