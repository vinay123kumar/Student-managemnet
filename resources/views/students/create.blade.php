@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4 text-center">Add New Student</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="student_name" class="label-navy"><h5>Student Name</h5></label>
        <input type="text" name="student_name" class="form-control" value="{{ old('student_name') }}">
    </div>

    <div class="form-group mb-3">
        <label for="class_teacher_id" class="label-navy"><h5>Class Teacher</h5></label>
        <select name="class_teacher_id" class="form-control">
            <option value="">Select Teacher</option>    
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ old('class_teacher_id') == $teacher->id ? 'selected' : '' }}>
                    {{ $teacher->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="class" class="label-navy"><h5>Class</h5></label>
        <input type="text" name="class" class="form-control" value="{{ old('class') }}">
    </div>

    <div class="form-group mb-3">
        <label for="admission_date" class="label-navy"><h5>Admission Date</h5></label>
        <input type="date" name="admission_date" class="form-control" value="{{ old('admission_date') }}">
    </div>

    <div class="form-group mb-3">
        <label for="yearly_fees" class="label-navy"><h5>Yearly Fees</h5></label>
        <input type="number" name="yearly_fees" class="form-control" value="{{ old('yearly_fees') }}" step="0.01">
    </div>

    <button type="submit" class="btn btn-success">Create Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary" style="color: #02022e;">Back</a>
</form>

</div>
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    h1 {
        font-weight: bold;
        color: #2c3e50;
    }

    label {
        font-weight: 500;
        color: #e3e9f0; 
    }

    .label-navy {
        color: blue; 
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>

@endsection
