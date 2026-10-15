
@extends('layouts.app')

@section('title', 'Product Category')

@section('content')
    <h2>Product Category</h2>

    <p>
        Category: {{ $category }}
    </p>

    <p>
        Product ID: {{ $id }}
    </p>

    <p>
        This page demonstrates how Laravel handles
        multiple route parameters.
    </p>
@endsection
