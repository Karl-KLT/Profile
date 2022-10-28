<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $user = getUser();
        return view('index',compact('user'));
    }

    public function skill()
    {
        return view('skills');
    }


}
