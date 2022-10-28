<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    }catch(Throwable $e){return '';};

    if($url == request()->path()){
        return "active";
    }
}

function carbonTimerForHumans($time)
{
    return Carbon::parse($time)->diffForHumans(null,false,true);
}

function hashString($text){return Hash::make($text);}

function checkUserAuth()
{
    if(Auth::check()){
        return getUser()->id;
    }
    return false;
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

function checkSA(){
    return getUser()->Profile->userType;
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
