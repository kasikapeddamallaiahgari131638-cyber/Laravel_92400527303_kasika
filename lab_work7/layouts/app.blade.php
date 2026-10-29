
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Portfolio')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #243047;
            line-height: 1.7;
        }

        nav {
            background: #14213d;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        nav h2 {
            color: #70d6ff;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
        }

        nav a:hover {
            color: #70d6ff;
        }

        .container {
            max-width: 1050px;
            margin: 40px auto;
            padding: 20px;
        }

        .hero {
            background: linear-gradient(135deg, #14213d, #345995);
            color: white;
            padding: 65px 25px;
            border-radius: 16px;
            text-align: center;
        }

        .hero h1 {
            font-size: 38px;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            background: #70d6ff;
            color: #14213d;
            padding: 11px 22px;
            border-radius: 6px;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #00000012;
        }

        footer {
            background: #14213d;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }

            nav a {
                margin: 0 8px;
            }

            .hero h1 {
                font-size: 28px;
            }
        }
    </style>

    @yield('styles')
</head>
<body>

    <nav>
        <h2>MyPortfolio</h2>

        <div>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} MyPortfolio.
           All Rights Reserved.</p>
    </footer>

    @yield('scripts')
</body>
</html>
