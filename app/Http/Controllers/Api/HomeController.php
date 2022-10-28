<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Login(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){

            return true;

        }

        return false;
    }
}
