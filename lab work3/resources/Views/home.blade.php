
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h2>Welcome to Laravel</h2>

    <p>This is the home page of our Laravel website.</p>

    <p>
        This project demonstrates Laravel routes, views,
        and wildcard parameters.
    </p>

    <h3>Available Examples</h3>

    <ul>
        <li><a href="{{ url('/about') }}">About Page</a></li>
        <li><a href="{{ url('/contact') }}">Contact Page</a></li>
        <li><a href="{{ url('/user/Rahul') }}">User Wildcard</a></li>
        <li><a href="{{ url('/product/Laptop') }}">Product Wildcard</a></li>
        <li>
            <a href="{{ url('/category/electronics/product/101') }}">
                Multiple Wildcards
            </a>
        </li>
        <li><a href="{{ url('/page/Services') }}">Optional Wildcard</a></li>
        <li><a href="{{ url('/product-id/101') }}">Numeric Wildcard</a></li>
    </ul>
@endsection
