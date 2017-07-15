<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function token(){
        return csrf_field();
    }
    public function login(){

    }
    public function register(){

    }
}
