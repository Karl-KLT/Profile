<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{

    public function index()
    {

        $user = getUser()->Profile;

        return view('Web.index',compact('user'));
    }

    public function saveImage(Request $request)
    {
        if($request->hasFile('image')){


            $upload = uploadFile($request->file('image'),'images');


            $user = getUser()->Profile;
            $user->Image = $upload;
            $user->update();

            return redirect()->back();
        }
    }

    public function deleteImage()
    {
        $user = getUser()->Profile;
        $user->Image = null;
        $user->update();
        deleteFile(getUser()->Profile->Image);
        return redirect()->back();
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
