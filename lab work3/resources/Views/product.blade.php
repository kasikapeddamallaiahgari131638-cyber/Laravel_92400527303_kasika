
@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <h2>Product Details</h2>

    <p>
        Product Name: {{ $name }}
    </p>

    <p>
        This page displays a product name received
        through a route wildcard.
    </p>
@endsection
