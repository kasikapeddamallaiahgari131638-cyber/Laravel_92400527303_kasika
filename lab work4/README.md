# Laravel Insert Data Into Database

Beginner practical: insert student data into a MySQL database using Laravel, Blade, a Controller, and Eloquent.

## Requirements
- PHP and Composer
- MySQL
- A Laravel-compatible PHP version for your installed Laravel release

## Setup
1. Extract this folder.
2. Open a terminal inside the extracted `InsertData` folder.
3. Create the Laravel project files in this folder by running:
   ```bash
   composer create-project laravel/laravel .
   ```
   If Composer says the directory is not empty, create a fresh Laravel project in a separate folder and copy the files from this ZIP into it, preserving the paths.
4. Create a MySQL database:
   ```sql
   CREATE DATABASE laravel_db;
   ```
5. Configure `.env` with your MySQL username/password:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
6. Copy the provided files into the matching Laravel paths, replacing the generated `Student.php`, migration, controller, routes, and adding the Blade view.
7. Run:
   ```bash
   php artisan migrate
   php artisan serve
   ```
8. Open http://127.0.0.1:8000/students

## Included files
- `app/Models/Student.php`
- `app/Http/Controllers/StudentController.php`
- `database/migrations/2026_01_01_000000_create_students_table.php`
- `routes/web.php`
- `resources/views/students/create.blade.php`

The ZIP contains the application code, not the full Laravel framework or vendor dependencies.
