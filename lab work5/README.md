# Laravel: Show Data From Database

This practical displays student records from MySQL using Laravel Eloquent and Blade.

## Setup
1. Extract this ZIP.
2. Copy these files into your existing Laravel project (you can reuse the project/database from the Insert Data practical).
3. If starting a new project, run `composer create-project laravel/laravel ShowData`, then copy these files into the matching paths.
4. Create the MySQL database with `CREATE DATABASE laravel_db;` and set credentials in `.env`:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_db
   DB_USERNAME=root
   DB_PASSWORD=
5. If the students table does not exist, copy the migration and run `php artisan migrate`.
6. Ensure at least one student record exists. You can use the insert-data practical or run:
   ```sql
   INSERT INTO students (name, email, course, created_at, updated_at)
   VALUES ('Rahul Patel', 'rahul@example.com', 'BCA', NOW(), NOW());
   ```
   Use an email that is not already in the table.
7. Run `php artisan serve` and open http://127.0.0.1:8000/students

## Included
- app/Models/Student.php
- app/Http/Controllers/StudentController.php
- database/migrations/2026_01_01_000000_create_students_table.php
- routes/web.php
- resources/views/students/index.blade.php

This ZIP contains code files, not the full Laravel framework or vendor dependencies.
