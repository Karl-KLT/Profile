<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Web')->group(function(){
    Route::get('/','HomeController@index')->name('Home');
    Route::get('skills','HomeController@skill')->name('home.skill');


    Route::get('Login',function(){
        if(Auth::check()){return redirect(route('Admin'));}
        return view('Auth.index');
    })->name('login');

    Route::get('signUp',function(){
        if(Auth::check()){return redirect(route('Admin'));}
        return view('Auth.signUp.index');
    })->name('signUp');

    Route::get('LogOut',function(){

        Auth::logOut();
        return redirect()->back();

    })->name('logOut');
});
// message routes
Route::group(['prefix'=>'chat','middleware'=>'auth'],function(){
    Route::get('/','Web\HomeController@chat')->name('Chat');
});

Route::group([
    'prefix'=>'Admin',
    'namespace'=>'Auth',
    'middleware'=>'auth'
],function(){
    Route::get('/','LoginController@index')->name('Admin');
});

Route::fallback(function(){
    return 'page not round';
});




Route::get('auth/re/google',function(){return Socialite::driver('google')->redirect();})->name('Authgoogle');
Route::get('auth/re/github',function(){return Socialite::driver('github')->redirect();})->name('Authgithub');














Route::get('auth/google',function(){
    $user = User::find(Auth::id())->first();
    $user->googleToken = googleUser()->token;
    $user->update();
    return redirect(route('Home'));
});

Route::get('auth/github',function(){
    $user = User::find(Auth::id())->first();
    $user->githubToken = githubUser()->token;
    $user->update();
    return redirect(route('Home'));
});
