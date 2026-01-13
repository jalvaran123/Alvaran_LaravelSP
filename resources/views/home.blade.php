@extends('layout')

@section('content')
    <div class="text-center py-5">
        <h1>Welcome to the Student Portal</h1>
        <p class="lead mt-3">
            This system allows you to manage student records efficiently.
            You can view, add, edit, and manage student information all in one place.
        </p>
        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg mt-3">View Student List</a>
    </div>
@endsection