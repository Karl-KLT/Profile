<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Accounts extends Component
{


    public $visitor;


    public function render()
    {
        return view('livewire.accounts');
    }

    public function __construct()
    {
        $this->visitor = checkVisitor();
    }

    public function LogOutFromGoogle()
    {
        $user = getUser()->first();
        $user->googleToken = NULL;
        $user->update();
    }

    public function LogOutFromGithub()
    {
        $user = getUser()->first();
        $user->githubToken = NULL;
        $user->update();
    }
}
