<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #21066b;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            justify-content: center; /* Center the navbar items */
        }

        .navbar-brand {
            color: #fff !important;
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .navbar-brand:hover {
            color: #EAEAEA !important;
        }

        /* Container Styling */
        /* .container {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        } */

        /* Table Styling */
        table.dataTable {
            border-collapse: collapse !important;
            background-color: #ffffff;
        }

        /* Button Styling */
        .btn-primary {
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Form Styling */
        .form-group label {
            font-weight: bold;
            color: #19033b;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Headings */
        h1,
        h5 {
            color: #343a40;
            margin-bottom: 1rem;
            text-align: center;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .navbar-brand {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('students.index') }}">Student Management</a>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
