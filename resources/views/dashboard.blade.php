@extends('layout')

@section('content')
<main class="dashboard">
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}</p>
    <a href="/logout">Logout</a>
</main>
@endsection