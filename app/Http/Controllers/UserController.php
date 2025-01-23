<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(Request $request){

        // validation.php file puth - Vendor->laravel->framework->src->Translation->lang->validation.php

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            'age' => 'required|numeric|between:18,40',
            'city' => 'required'
        ]);


        return $request->all();
    }
}
