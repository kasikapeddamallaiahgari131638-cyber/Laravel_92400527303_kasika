<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students From Database</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f3f6fb; margin: 0; padding: 32px 16px; color: #1f2937; }
        .card { max-width: 1000px; margin: 0 auto; background: white; padding: 28px; border-radius: 12px; box-shadow: 0 8px 28px rgba(0,0,0,.08); }
        h1 { margin-top: 0; color: #183153; }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 13px 15px; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background: #2563eb; color: white; }
        tr:nth-child(even) { background: #f8fafc; }
        .empty { padding: 18px; border-radius: 6px; background: #eff6ff; color: #1d4ed8; }
        .count { color: #64748b; }
    </style>
</head>
<body>
<main class="card">
    <h1>Students From Database</h1>
    <p class="count">Total students: {{ $students->count() }}</p>

    @if ($students->isEmpty())
        <p class="empty">No student records found. Insert data into the students table first.</p>
    @else
        <div class="table-wrap">
            <table>
                <thead>
                    <tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th></tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->course }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</main>
</body>
</html>
