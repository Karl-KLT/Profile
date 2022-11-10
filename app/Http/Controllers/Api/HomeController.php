<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Throwable;

class HomeController extends Controller
{

    public function ShowDevSecure()
    {
        if(request()->date){
            return carbonTimerForHumans(getDevSecure()->updated_at);
        }

        return getDevSecure()->DevSecure;
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

            return $key->DevSecure;

        }catch(Throwable $e){

            return response()->json(['status'=>401,'message'=>'something went wrong with ur code']);

        }
    }

}
