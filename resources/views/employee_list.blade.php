@extends('master')
@section('content')
    <div style="margin-top:20px;" class="row">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h2>An Example of Checked/Selection/Disable</h2>
            </div>
        </div>
    </div>
    <table style="margin-top: 20px;" class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Status</th>
            <th>Awarded</th>
            <th>Action</th>
        </tr>
        @forelse($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>
            <span @class([
                'text-white',
                'bg-danger'=>$employee->status=='Pending',
                'bg-success'=>$employee->status=='Awarded',
                'bg-warning'=>$employee->status=='Wait',

            ])>

            {{$employee->status}}

            </span>
            </td>
            <td><input type="checkbox" name="awarded" value="awarded" @checked(old('awarded',$employee->is_awarded)) /></td>
            <td><a class="btn btn-primary" href="{{route ('employees.edit',$employee->id) }}">Edit</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No Employee Available</td>
        </tr>
        @endforelse
    </table>