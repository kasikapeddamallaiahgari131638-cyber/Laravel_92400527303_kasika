
@extends('layouts.app')

@section('title', 'Home - MyPortfolio')

@section('content')

    <section class="hero">
        <h1>Welcome to My Portfolio</h1>

        <p>
            Discover my skills, projects and creative work.
        </p>

        <a href="{{ route('about') }}" class="btn">
            Learn More
        </a>
    </section>

    <h2 style="margin-top: 35px;">What I Do</h2>

    <div class="cards">
        <div class="card">
            <h3>Web Development</h3>
            <p>
                Creating modern and responsive websites
                using HTML, CSS and Laravel.
            </p>
        </div>

        <div class="card">
            <h3>UI Design</h3>
            <p>
                Designing clean, attractive and
                user-friendly interfaces.
            </p>
        </div>

        <div class="card">
            <h3>Programming</h3>
            <p>
                Developing useful applications using
                modern programming technologies.
            </p>
        </div>
    </div>

@endsection
