
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Laravel Routes Demo')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f9;
            color: #333;
        }

        header {
            background-color: #e74430;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #222;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
        }

        nav a:hover {
            color: #ffcccb;
        }

        main {
            max-width: 800px;
            margin: 30px auto;
            padding: 25px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px #ddd;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #666;
        }
    </style>
</head>

<body>
    <header>
        <h1>Laravel Routes and Views</h1>
        <p>Laravel Tutorial for Beginners</p>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Laravel Routes and Wildcards Practical</p>
    </footer>
</body>
</html>
