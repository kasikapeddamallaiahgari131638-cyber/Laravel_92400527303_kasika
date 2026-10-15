
@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h2>User Profile</h2>

    <p>
        Welcome, {{ $name }}!
    </p>

    <p>
        The username is dynamically received from the URL
        using the route wildcard.
    </p>
@endsection
