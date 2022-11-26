<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $user = getUser()->Profile;

        return view('Web.index',compact('user'));
    }

    public function saveProm(Request $request)
    {
        $user = User::find($request->id)->Profile;
        $user->userType = $request->prom;
        $user->update();

        return redirect(route('Config'));
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
    // routes
    public function skill()
    {
        return view('Web.skills');
    }


    public function posts()
    {
        return view('Web.posts');
    }


    public function Sections()
    {
        return view('Web.Sections.Sections');
    }

    public function Animes()
    {
        return view('Web.Sections.Animes.index');
    }

    public function config()
    {
        if(checkSA()){
            return view('Web.config');
        }

        return redirect(route('Home'));
    }


}
