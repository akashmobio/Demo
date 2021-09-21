<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function testUser(Request $request)
    {
        $request->validate([
            'name'=>'required |max:10',
            'password' => 'required | min:5'
        ]);
        return $request->input();
    }

    public function index(){
        $name = "Akash";
        $data = array(
            'name'=>'Akki',
            'age'=> 24,
            'email' => 'Akash@gmail.com'
        );
        return view('about',compact('name','data'));
    }

    public function dataFetch(){
        DB::select('select * from users');
    }
}

