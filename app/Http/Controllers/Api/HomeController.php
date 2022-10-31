<?php

namespace App\Http\Controllers\Api;

use App\Models\Devsecure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Throwable;

class HomeController extends Controller
{
    // public function Login(Request $request)
    // {

    //     if(Auth::attempt($request->only('email','password'))){

    //         if($request->Profile){

    //             return getUser()->Profile;

    //         }

    //         // DevSecure = false

    //         return getUser();
    //     }

    //     return false;

    // }

    // DevSecure = false

    public function ShowDevSecure()
    {
        return getDevSecure()->DevSecure;
    }

    public function updateDevSecure()
    {
        try{
            $key = getDevSecure()->first();
            $key->DevSecure = $key->DevSecure ? 0 : 1;
            $key->update();
            return true;
        }catch(Throwable $e){
            return false;
        }
    }

}
