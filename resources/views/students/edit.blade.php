@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center" >Edit Student</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="student_name" style="color: #060646;"><h5>Student Name</h5></label>
            <input type="text" name="student_name" class="form-control" value="{{ old('student_name', $student->student_name) }}" >
        </div>

        <div class="form-group mb-3">
            <label for="class_teacher_id" style="color: #060646;"><h5>Class Teacher</h5></label>
            <select name="class_teacher_id" class="form-control" >
                <option value="">Select Teacher</option>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $student->class_teacher_id == $teacher->id ? 'selected' : '' }}>
                        {{ $teacher->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="class" style="color: #060646;"><h5>Class</h5></label>
            <input type="text" name="class" class="form-control" value="{{ old('class', $student->class) }}" >
        </div>

        <div class="form-group mb-3">
            <label for="admission_date" style="color: #060646;"><h5>Admission Date</h5></label>
            <input type="date" name="admission_date" class="form-control" value="{{ old('admission_date', $student->admission_date) }}">
        </div>

        <div class="form-group mb-3">
            <label for="yearly_fees"  style="color: #060646;"><h5>Yearly Fees</h5></label>
            <input type="number" name="yearly_fees" class="form-control" value="{{ old('yearly_fees', $student->yearly_fees) }}" step="0.01">
        </div>

        <button type="submit" class="btn btn-success">Update Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection

