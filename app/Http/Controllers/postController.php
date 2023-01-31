<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;

class postController extends Controller
{
    public function getData(){
        $fetchData = DB::select('SELECT * FROM Products');
        return view('layouts.mytest',["data"=>$fetchData]);
    }
}
