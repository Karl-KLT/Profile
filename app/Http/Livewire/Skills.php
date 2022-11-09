<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Throwable;

class Skills extends Component
{
    public $Name;
    public $MaxNum;

    public $visitor;

    public $skills;

    public $message = null;

    protected $listeners = [
        'save'=>'refreshEvent',
        'skillRemoved'=>'ConfskillRemoved'
    ];

    protected $rules = [
        "Name"=>"required|unique:skills",
        "MaxNum"=>"required|numeric|between:1,100"
    ];

    public function __construct()
    {
        $this->visitor = checkVisitor();
    }

    public function refreshEvent()
    {

        $validate = $this->validate();


        if($validate){

            Skill::create([
                'Name'=>$this->Name,
                'MaxNum'=>$this->MaxNum,
                'user_id'=>Auth::user()->id
            ]);

            $this->Name = "";
            $this->MaxNum = "";

            $this->skills = getSkills();

            return $this->message = 'updated';

        }
        return $this->message = 'Smth wrong';
    }

    public function remove($id)
    {
        try{
            $this->dispatchBrowserEvent('messageSuccess',['id'=>$id]);
        }catch(Throwable $e){dd($e);}
    }public function ConfskillRemoved($id){getSkills($id);}


    public function render()
    {
        $this->skills = getSkills();

        return view('livewire.skills');
    }
}
