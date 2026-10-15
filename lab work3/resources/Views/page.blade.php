
@extends('layouts.app')

@section('title', 'Dynamic Page')

@section('content')
    <h2>{{ $title }}</h2>

    <p>
        This page uses an optional route wildcard.
    </p>

    <p>
        If no title is provided in the URL,
        the default title is Welcome.
    </p>
@endsection
