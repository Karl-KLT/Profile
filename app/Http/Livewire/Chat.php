<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{

    // public $groups;
    public $getAllMessages;

    public $message;

    public $groupDetail;

    protected $rules = [
        'message'=>"required"
    ];

    public function __construct()
    {
        $this->getAllMessages = Message::all();
    }

    public function sendMessage()
    {
        $this->validate();
        Message::create(['Message'=>$this->message,'user_id'=>Auth::id()]);
        $this->getAllMessages = Message::all();
        $this->message = '';


    }

    public function render()
    {
        return view('livewire.chat');
    }
}
