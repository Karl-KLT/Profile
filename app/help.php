<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

function ActiveRoutes($url = null)
{

    try{
        if(is_array($url)){
            for($i = 0 ; $i <= count($url) ; $i++){

                if(in_array($url[$i],$url) && $url[$i] == request()->path()){

                    return "active";

                };

            }

        }
    }catch(Throwable $e){
        return $e;
    };

    if($url == request()->path()){
        return "active";
    }
}


function getSkills($findById = null)
{
    if ($findById) {
        User::find(Auth::user()->id)->Skills->where('id',$findById)->first()->delete();
    }

    if(Auth::check()){
        return User::find(Auth::user()->id)->Skills;
    }
    return User::find(1)->Skills;
}

function getUser()
{
    if(Auth::check()){
        return User::find(Auth::id());
    }
    return User::find(1);

}


function googleUser(){
    if(Auth::check()){
        return Socialite::driver('google')->user();
    }
    return false;
}
function googleUserByToken(){
    return Socialite::driver('google')->userFromToken(getUser()->googleToken);
}

function checkGoogleToken(){
    return getUser()->googleToken ? true : false;
}


function githubUser(){
    if(Auth::check()){
        return Socialite::driver('github')->user();
    }
    return false;
}
function githubUserByToken(){
    return Socialite::driver('github')->userFromToken(getUser()->githubToken);
}

function checkGithubToken(){
    return getUser()->githubToken ? true : false;
}
