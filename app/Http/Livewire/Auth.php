<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth as FacedesAuth;

class Auth extends Component
{
    public $email,$password;


    public $error;



    public function login()
    {
        if(FacedesAuth::attempt(['email' => $this->email, 'password' => $this->password],true)){
            redirect(route('Admin'));
        }
        $this->error = 'email or password not correct';
    }
    public function render()
    {
        return view('livewire.auth');
    }
}
