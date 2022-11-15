<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Config extends Component
{
    public $users;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.config');
    }
}
