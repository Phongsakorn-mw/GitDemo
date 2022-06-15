<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use App\Models\Comments;
use App\Models\File;
use App\Models\Posts;
use App\Models\Status;
use App\Models\User;


class Testcontroller extends Controller
{
   public function xxx(){
    $all = User::all();

    return view('welcome',compact('all'));
   }
}
