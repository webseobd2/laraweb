@extends('layouts.master')

@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 Show student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('students.index') }}">Back to index</a>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('students.create') }}">Back to the insert Form</a>
        </div>
    </div>
</div>

    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $student->name}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                 {{ $student->address }}
            </div>
        </div>
    </div>

@endsection