<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Throwable;

class SignUp extends Component
{

    public $email;
    public $password;
    public $Cpassword;

    public $error;

    protected $rules = [

        'email'=>'required|email|unique:users',

        'password'=>'required',

        'Cpassword'=>'required|same:password'
    ];

    public function Reg()
    {
        $this->validate();
        
        try{
            User::create(['email'=>$this->email,'password'=>hashString($this->password)]);

            if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){

                Profile::create(['user_id'=>Auth::id(),'USER_SID'=>randomString()]);

                return redirect(route('Profile'));
            }
        }catch(Throwable $e){
            dd($e);
        }
    }
    public function render()
    {
        return view('livewire.sign-up');
    }
}
