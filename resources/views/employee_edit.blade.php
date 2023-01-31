@extends('master')

@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 Edit student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('employees.index') }}">Back to index</a>
        </div>
    </div>
</div>
<form action="#" method="POST" style="margin-top: 20px;">
@csrf
@method('PUT')
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $employee->name}}" class="form-control" placeholder="Enter your Name here">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrption:</strong>
                <textarea class="form-control" style="height: 80px;" name="description" placeholder="Your address here">{{ $employee->description }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Is awarded?</strong>
                <input type="checkbox" name="is_awarded" value="1" @checked(old('1',$employee->is_awarded))
            </div>
        </div>
    </div>

    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                <select name="status">
                    @foreach(['Pending','Wait','Active'] as $status)
                        <option value="{{ $status }}" @Selection($status==$employee->
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="text-center cl-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Update</button>
        </div>
    </div>
@endsection