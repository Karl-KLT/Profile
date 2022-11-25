<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Throwable;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);
        $token = auth('api')->attempt($credentials);

        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        if(auth('api')->user()->Profile->userType == 0){
            return response()->json(['error' => 'ur not Admin'], 401);
        }

        return $this->respondWithToken($token);

    }


    public function ShowDevSecure()
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


            return response()->json(['status'=>200,'message'=>'successfully','Secure'=>$key->DevSecure],200);

        }catch(Throwable){

            return response()->json(['status'=>401,'message'=>'something went wrong with ur code'],200);

        }
    }

    // ///////////

    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
