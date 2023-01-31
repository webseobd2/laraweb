<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class myController extends Controller
{
    public function sayHello(){
         //echo "Hello I am from controller";
         return view ('layouts.mytest');
    } 

    public function getData($name,$age){
        return "Welcome $name!, you'r $age years old";
    }

    public function getUrlData($Request, $request){
        //return "Welcome ".$request->name."!, you'r " . $request->age . " years old";
        dd($request);
    }
}
