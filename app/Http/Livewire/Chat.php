<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{

    // public $groups;
    public $getMessages;

    public $message;

    protected $rules = [
        'message'=>"required"
    ];
    
    protected $listeners = ['SMessage'=>'sendMessage'];

    public function sendMessage()
    {

        $this->validate();

        Message::create([
            'Message'=>$this->message,
            'user_id'=>Auth::id()
        ]);


        $this->message = '';
        $this->getAllMessages = Message::all();

    }

    public function render()
    {
        $this->getMessages = Message::all();
        return view('livewire.chat');
    }
}
