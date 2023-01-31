<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employee_list', compact('employees'));
    }
    
    public function edit(Employee $employee){
        return view('employee_edit',compact('employee'));
    }
}
