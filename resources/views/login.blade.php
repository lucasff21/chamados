@extends('layouts.main')

@section('title', 'LUCAS DEV')

@section('content')

    <div class="container">
        <div class="col-md-6 offset-md-3">
            <form action="/" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Senha</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection
