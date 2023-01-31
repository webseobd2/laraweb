<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(){
        echo "This fuction for Create";
    }

    public function read(App\Models\User $user){
        return $user->name."<br>" . $user->email;
    }

    public function update($id){
        echo "This fuction for update";
    }

    public function delete($id){
        echo "This fuction for delete";
    }
}
