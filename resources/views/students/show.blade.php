@extends('layout')

@section('content')
    <h1>Student Profile</h1>

    <div class="card mt-4">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="150">Name:</th>
                    <td>Juan Dela Cruz</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>juan.delacruz@email.com</td>
                </tr>
                <tr>
                    <th>Course:</th>
                    <td>BSIT</td>
                </tr>
                <tr>
                    <th>Year Level:</th>
                    <td>3rd Year</td>
                </tr>
            </table>
        </div>
    </div>

    <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">Back to Student List</a>
@endsection