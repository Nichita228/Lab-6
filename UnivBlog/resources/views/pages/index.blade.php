@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To {{ config('app.name', 'Laravel') }} !</h1>
        <p>This is the simple blog</p>
        @if(!auth()->check())
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
@endsection
