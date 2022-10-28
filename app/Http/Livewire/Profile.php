<?php

namespace App\Http\Livewire;

use App\Models\Profile as ModelsProfile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use Throwable;

class Profile extends Component
{
    public $Name;
    public $Bio;
    public $localBio;
    public $Message;

    protected $listeners = ['Save'=>'saveDataAndRefresh'];

    public function __construct()
    {
        $user = getUser()->Profile;
        // dd($user);
        $this->Name = $user->Name;
        $this->Bio = $user->Bio;
        $this->localBio = $user->localBio;
        $this->Message = $user->Message;
    }


    public function saveDataAndRefresh()
    {

        try{
            $user = getUser()->Profile;

            $user->Name = $this->Name;
            $user->Bio = $this->Bio;
            $user->localBio = $this->localBio;
            $user->Message = $this->Message;
            $user->update();

            $this->dispatchBrowserEvent('saveSuccess');
        }catch(Throwable $e){
            $this->dispatchBrowserEvent('saveFaild');
        }
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
