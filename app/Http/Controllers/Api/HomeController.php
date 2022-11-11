<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Throwable;

class HomeController extends Controller
{

    public function ShowDevSecure() // get
    {
        return response()->json(['Secure'=>getDevSecure()->DevSecure ? 'true' : 'false' , 'satus'=>200,'date'=>carbonTimerForHumans(getDevSecure()->updated_at)],200);
    }

    public function updateDevSecure()
    {
        try{

            $key = getDevSecure()->first();

            if(request()->value) {
                $key->DevSecure = request()->value;
            }else{
                $key->DevSecure = $key->DevSecure ? 0 : 1;
            }

            $key->update();

            // return $key->DevSecure;
            return response()->json(['status'=>200,'message'=>'successfully'],200);

        }catch(Throwable $e){

            return response()->json(['status'=>401,'message'=>'something went wrong with ur code'],200);

        }
    }

}
