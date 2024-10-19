<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::with('teacher')->paginate(10);

        return view('students.index', compact('students'));
    }
    

    public function create()
    {
        $teachers = Teachers::all();
        $students = Students::all(); 
    
        return view('students.create', compact('teachers', 'students'));
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'student_name' => 'required|string',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);

        $students = Students::create($data);
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }


    public function edit(Students $student)
    {
        $teachers = Teachers::all();
        return view('students.edit', compact('student', 'teachers'));
    }
    

    public function update(Request $request, Students $student)
    {
        $request->validate([
            'student_name' => 'required|string',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Students $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
    
}
