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

// get users



Route::namespace('Web')->group(function(){

    Route::get('/','HomeController@index')->name('Home');

    Route::get('User/{USER_SID}','HomeController@visitUser')->name('visitUser');

    Route::get('skills','HomeController@skill')->name('home.skills');


    Route::post('saveImage','HomeController@saveImage')->name('saveImage');
    Route::post('deleteImage','HomeController@deleteImage')->name('deleteImage');

    Route::get('Login',function(){
        if(Auth::check()){return redirect(route('Profile'));}
        return view('Auth.index');
    })->name('login');

    Route::get('signUp',function(){
        if(Auth::check()){return redirect(route('Profile'));}
        return view('Auth.signUp.index');
    })->name('signUp');

    Route::get('LogOut',function(){

        Auth::logOut();
        return redirect()->back();

    })->name('logOut');
});
// Posts routes
Route::group(['prefix'=>'posts','namespace'=>'Web','middleware'=>'auth'],function(){
    Route::get('/','HomeController@posts')->name('posts');
});

Route::group([
    'prefix'=>'Profile',
    'namespace'=>'Auth',
    'middleware'=>'custom_Auth'
],function(){
    Route::get('/','LoginController@index')->name('Profile');
});

Route::group(['prefix'=>'Config','namespace'=>'Web','middleware'=>'custom_Auth'],function(){

    Route::get('/','HomeController@config')->name('Config');

    Route::post('saveProm','HomeController@saveProm')->name('saveProm');

});


Route::group(['prefix'=>'Sections','namespace'=>'Web','middleware'=>'custom_Auth'],function(){

    Route::get('/','HomeController@Sections')->name('Sections');


    Route::get('Animes','HomeController@Animes')->name('Animes');

    // Route::post('saveProm','HomeController@saveProm')->name('saveProm');

});



Route::fallback(function(){
    return '404 -> page not found';
})->name('pageNotFound');




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
