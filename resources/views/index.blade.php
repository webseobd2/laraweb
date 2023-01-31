@extends('layouts.master')

@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 show student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('students.create') }}">Add new student</a>
        </div>
    </div>
</div>
<table class="table table-bordered" style="margin-top: 20px;">
    <tr>
        <th>No:</th>
        <th>Name:</th>
        <th>Address:</th>
        <th>Action</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->address}}</td>
        <td>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        <!-- <a class="btn btn-info" href="{{ route('students.edit', $student->id) }}">Edit</a> -->
        <a class="btn btn-info" href="{{ route('students.edit', $student->id)}}">Edit</a>
        &nbsp &nbsp
        <a class="btn btn-primary" href="{{ route('students.show', $student->id)}}">Show</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
        
    </tr>
    @endforeach
</table>
@endsection