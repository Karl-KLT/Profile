<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Posts extends Component
{
    public $text;

    public $posts;

    protected $rules = ['text'=>'required'];

    public function SendPost()
    {

        $this->validate();

        return $this->dispatchBrowserEvent('working_on_it');
    }



    public function render()
    {
        return view('livewire.posts');
    }
}
