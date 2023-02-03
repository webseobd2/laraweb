<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\postController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\monirController;
use App\Http\Controllers\asaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\invokableController;
use Illuminate\Support\Facades\DB;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*
laravel Route parameter
1. required parameter
2. optional parameter
3. regular parameter
4. regular expression constaints
5. global constraints

*/

/*
Route model binding
1. implicit binding
2. explicit binding
*/

Route::get('/users/{user}',function(User $user){
    // return $user->name."<br>" . $user->email;
    return view('layouts.mytest',['data'=>$user]);
});

Route::resource('employees', EmployeeController::class);
Route::resource('monir', monirController::class);

Route::get('/new', function () {
    return view('app');
});

Route::get('/clscomp', function () {
    return view('app2');
});

Route::get('/slot',[studentController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/myhome', function () {
    return view('pages.home',[
        'isActive'=>true,
    ]);
});

Route::get('/about-me', function () {
    return view('pages.aboutme');
});

Route::get('/blade-practice', function(){
    $records = [4,7,9];
    $users = [
        ["id"=>1,"name"=>"masud","address"=>"Dhaka,Bangladesh"],
        ["id"=>2,"name"=>"hirri","address"=>"Dilli,Bangladesh"],
    ];
    $student = [];
    return view('practice',["users"=>$student]);
});


// Route::get('/hello', function () {
//     // echo "<h2>Hello laravel</h2>";
//     return view('layouts.test');
// });

use Illuminate\Support\Facades\view;
Route::get('/hello', function () {
    $student=[
        'name'=>'web monir',
        'age'=>'18',
    ];

    return View::first(['practice.hello','welcome'],$student);
});

// Route::get('/asa', function () {
//     return view('asa.asa_show');
// });

Route::resource('asas',asaController::class);

// Route::get('/hello', function () {
//      return view('practice.hello', ['name' => 'James']);
// });

Route::get('/test',[myController::class,'sayHello']);

// Route::get('/students/{name}/{age?s}', function ($name="",$age="Child") {
//     echo "Students Name is: " . $name." You're $age years old";
// });

Route::get('/user/{name}', function ($name){
    return "Name: $name";
})->where('name','[A-Za-z]+');

// Route::get('/user/{id}/{username}', function ($id,$name){
//     return "User Id: $id and UserName:$username";
// })->where(['id'=>'[0-9]+' , 'name'=>'[A-Za-z]+']);

// Route::get('/user/{id}/{username}', function ($id,$name){
//     return "User Id: $id and UserName:$username";
// })->whereAlphaNumeric('name');

// Route::get('/user/profile', function (){
//     echo "Hello I am from user profile";
// })->name('profile');


Route::get('/user/profile',
  [myController::class,'sayHello']
)->name('profile');

// Route::get('/user/test', function(){
//     return redirect()->route('profile');
// });

// Route::group([], function(){
//     Route::get('/create', function(){
//         echo "this is route for Create/Insert";
//     });
//     Route::get('/read', function(){
//         echo "this is route for Read";
//     });
//     Route::get('/update/{id}', function($id){
//         echo "this is route for update";
//     });
//     Route::get('/delete{id}', function($id){
//         echo "this is route for Delete";
//     });
// });

Route::group(['prefix'=>'user'], function() {
    Route::get('/create',[userController::class,'create']);
    Route::get('/read',[userController::class,'read']);
    Route::get('/update/{id}',[userController::class,'update']);
    Route::get('/delete/{id}',[userController::class,'delete']);
});

Route::group(['prefix'=>'post'], function() {
    Route::get('/create',[userController::class,'create']);
    Route::get('/read',[userController::class,'read']);
    Route::get('/update/{id}',[userController::class,'update']);
    Route::get('/delete/{id}',[userController::class,'delete']);
});

Route::group(['prefix'=>'monir'], function() {
    Route::get('/create',[monirController::class,'create']);
    Route::get('/read',[monirController::class,'read']);
    Route::get('/update/{id}',[monirController::class,'update']);
    Route::get('/delete/{id}',[monirController::class,'delete']);
});

Route::get('/get-products',function() {
    $fetchData = DB::select('SELECT * FROM products');
    // echo "<pre>";
    // print_r($fetchData);
    // echo "</pre>";
    return view ('layouts.mytest',["data"=>$fetchData]);
    // foreach($fetchData as $val){
    //     echo $val->name, "<br>";
    // } 
});

// Route::get('/get-data', [postController::class, 'getData'])->name('get.data');

// Route::get('/users/{user}', [userController::class, 'read'])->name('get.data');

  // Route::get('/getdata/{name}/{age}', [myController::class,'getData']);

Route::get('/get-url-data', [myController::class, 'getUrlData']);

//    Route::get('/about', [myController::class, 'about']);
//    Route::get('/faq', [myController::class, 'faq']);
//    Route::get('/term', [myController::class, 'term']);

// Route::get('/pages/{pages}',invokableController::class)->name('page');

   Route::get('/{pages}',invokableController::class)
        ->name('page')
        ->where('pages','about|faq|terms');


Route::resource('students',studentController::class);
