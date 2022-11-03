<?php

namespace App\Http\Controllers\Api;

use App\Models\Devsecure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            return false;

        }
    }

}
