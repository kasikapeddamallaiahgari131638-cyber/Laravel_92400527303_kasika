<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id', 'desc')->get();

        return view('students.index', compact('students'));
    }
}
