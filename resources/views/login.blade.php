@extends('layout')

@section('content')
<main>

    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf
        <div class="form-group">
            <label for="username">Username*</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username...">
        </div>

        <div class="form-group">
            <label for="password">Password*</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Password...">
        </div>

        <button type="submit" class="btn btn-primary">Inloggen</button>

    </form>

    @if($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>  
    @endif
</main>
@endsection