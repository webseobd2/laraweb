<?php
namespace App\Http\View\Creators;

use Illuminate\View\View;
use App\Models\Student;

class StudentsCreator {
    public function create(View $view){
        $view->with('students',Student::orderBy('name')->get());
    }
}