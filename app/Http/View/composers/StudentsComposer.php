<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Student;

class StudentsComposer {
    public function composers(View $view){
        $view->with('students',Student::orderBy('name')->get());
    }
}