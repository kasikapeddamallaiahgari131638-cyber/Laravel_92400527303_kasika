<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student Data</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f3f6fb; margin: 0; padding: 32px 16px; }
        .card { max-width: 520px; margin: 0 auto; background: white; padding: 28px; border-radius: 12px; box-shadow: 0 8px 28px rgba(0,0,0,.08); }
        h1 { margin-top: 0; color: #183153; }
        label { display: block; margin: 16px 0 6px; font-weight: bold; }
        input { box-sizing: border-box; width: 100%; padding: 11px; border: 1px solid #cbd5e1; border-radius: 6px; }
        button { margin-top: 22px; width: 100%; padding: 12px; border: 0; border-radius: 6px; background: #2563eb; color: white; font-size: 16px; cursor: pointer; }
        .success { background: #dcfce7; color: #166534; padding: 12px; border-radius: 6px; }
        .errors { color: #b91c1c; }
    </style>
</head>
<body>
    <main class="card">
        <h1>Student Registration</h1>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ url('/students') }}" method="POST">
            @csrf

            <label for="name">Student Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            <label for="course">Course</label>
            <input id="course" type="text" name="course" value="{{ old('course') }}" required>

            <button type="submit">Insert Data</button>
        </form>
    </main>
</body>
</html>
