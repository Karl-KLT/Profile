<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use Throwable;

class Profile extends Component
{
    use WithFileUploads;

    public $Image,$Name,$Bio,$localBio,$Message;


    protected $listeners = ['Save'=>'saveDataAndRefresh'];



    public function __construct()
    {


        $user = getUser()->Profile;

        $this->Image = $user->Image;

        $this->Name = $user->Name;
        $this->Bio = $user->Bio;
        $this->localBio = $user->localBio;
        $this->Message = $user->Message;

    }

    public function copySidLink()
    {
        $this->dispatchBrowserEvent('saveSuccessWithSid',['sidLink'=>(substr(env('APP_URL'),-1) == '/' ? env('APP_URL') : env('APP_URL').'/') .'User/'.getUser()->Profile->USER_SID]);
    }

    public function saveDataAndRefresh()
    {

        try{
            $this->Image->storeAs('public/imgs/'.getUser()->Profile->USER_SID,'User_image.jpg');

            $user = getUser()->Profile;

            $user->Image = 'storage/imgs/'.getUser()->Profile->USER_SID.'/'.'User_image.jpg';
            $user->Name = $this->Name;
            $user->Bio = $this->Bio;
            $user->localBio = $this->localBio;
            $user->Message = $this->Message;

            $user->update();

            $this->dispatchBrowserEvent('saveSuccess');
        }catch(Throwable $e){
            dd($e);
            $this->dispatchBrowserEvent('saveFaild');
        }
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
