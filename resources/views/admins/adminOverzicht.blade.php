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
                <th>Delete</th>
            </tr>
            @foreach($admins as $admin)
                <tr>
                    <td>{{$admin['name']}}</td>
                    <td>{{$admin['email']}}</td>
                    <td>
                      <form action="{{ route('admins.destroy', $admin['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <span class="material-icons">delete</span>
                        </button>
                      </form>
                    </td>
                </tr>
            @endforeach 
            <tr>
                <th colspan="4"><a href="/register"><button>+ Add new</button></a></th>
            </tr>
            </tbody>
        </table>
</main>
@endsection