<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index(){
     $students = Student::with('subjects')->get();


        return inertia('Subject', [
            'subjects' => $students
        ]);
    }
}
