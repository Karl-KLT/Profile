<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Throwable;

class HomeController extends Controller
{

    public function ShowDevSecure()
    {
        return getDevSecure()->DevSecure;
    }

    public function updateDevSecure(bool $defValue = null)
    {
        try{

            $key = getDevSecure()->first();

            if($defValue) {
                $key->DevSecure = $defValue;
            }

            $key->DevSecure = $key->DevSecure ? 0 : 1;

            $key->update();

            return true;

        }catch(Throwable $e){

            return response()->json(['status'=>401,'message'=>'something went wrong with ur code']);

        }
    }

}
