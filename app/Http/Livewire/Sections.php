<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sections extends Component
{

    public function goToAnimes()
    {
        return redirect(route('Animes'));
    }


    public function render()
    {
        return view('livewire.sections');
    }
}
