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


            if($request->Profile){
                return getUser()->Profile;
            }

            return true;

        }

        return false;

    }


    public function Callback(Request $request)
    {
        return $request->all();
    }
}
