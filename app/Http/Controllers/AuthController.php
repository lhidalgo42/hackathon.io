<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function token(){
        return json_encode(csrf_field());
    }
    public function login(Request $request){
        return $request->all();
    }
    public function register(Request $request){
        return $request->all();
    }
}
