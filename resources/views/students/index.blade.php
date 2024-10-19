@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Students List</h1>
    
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <table class="table table-bordered" id="studentsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Class Teacher</th>
                <th>Class</th>
                <th>Admission Date</th>
                <th>Yearly Fees</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->teacher->name ?? 'N/A' }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->admission_date }}</td>
                    <td>{{ number_format($student->yearly_fees, 2) }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    body {
        background-color: #0e1220;
        font-family: 'Arial', sans-serif;
    }

    h1 {
        font-weight: bold;
        color: #8cb62b;
    }

 

    .btn-primary {
        background-color: #3498db;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    .btn-warning {
        background-color: #f39c12;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #e67e22;
    }

    .btn-danger {
        background-color: #e74c3c;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
    }

    .table th {
        background-color: #3498db;
        color: #ffffff;
        text-align: center;
    }

    .table th, .table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: center;
        vertical-align: middle;
    }

    .table tr:hover {
        background-color: #f4f6f7;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
    }
</style>


<script>
    $(document).ready(function() {
        $('#studentsTable').DataTable({
            paging: true,  
            searching: false, 
            ordering: true, 
            order: [], 
        });
    });
</script>

@endsection
