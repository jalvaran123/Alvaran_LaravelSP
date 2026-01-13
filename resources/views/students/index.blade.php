@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Student List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan Dela Cruz</td>
                <td>BSIT</td>
                <td>3rd Year</td>
                <td>
                    <a href="{{ route('students.show', 1) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('students.edit', 1) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Maria Santos</td>
                <td>BSCS</td>
                <td>2nd Year</td>
                <td>
                    <a href="{{ route('students.show', 2) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('students.edit', 2) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Pedro Reyes</td>
                <td>BSIT</td>
                <td>4th Year</td>
                <td>
                    <a href="{{ route('students.show', 3) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('students.edit', 3) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Ana Garcia</td>
                <td>BSIS</td>
                <td>1st Year</td>
                <td>
                    <a href="{{ route('students.show', 4) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('students.edit', 4) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Jose Rizal</td>
                <td>BSCS</td>
                <td>3rd Year</td>
                <td>
                    <a href="{{ route('students.show', 5) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('students.edit', 5) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection