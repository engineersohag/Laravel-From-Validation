<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required'
        ]);


        return $request->all();
    }
}
