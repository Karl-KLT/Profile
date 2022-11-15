<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $user = getUser()->Profile;

        return view('Web.index',compact('user'));
    }

    public function visitUser($USER_SID)
    {

        if(getUser()->Profile->USER_SID == $USER_SID){
            return redirect(route('Home'));
        }

        if(!getUser($USER_SID)){
            return redirect('pageNotFound');
        }

        $user = getUser($USER_SID)->Profile;

        return view('Web.index',compact('user'));
    }

    public function skill()
    {
        return view('Web.skills');
    }


    public function posts()
    {
        return view('Web.posts');
    }

    public function config()
    {
        return view('Web.config');
    }


}
