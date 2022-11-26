<?php

namespace App\Http\Livewire;

use Jikan\MyAnimeList\MalClient;
use Jikan\Request\Search\AnimeSearchRequest;
use Jikan\Request\Top\TopAnimeRequest;
use Livewire\Component;

class Animes extends Component
{
    private $Jikan;
    public $search;
    protected $rules = [
        'search'=>'required|min:3'
    ];

    public function __construct()
    {
        $this->Jikan = new MalClient;
    }


    public function render()
    {

        $Animes = null;

        if($this->search){

            $this->validate();

            $Animes = $this->Jikan->getAnimeSearch(new AnimeSearchRequest($this->search,1));

        }else{

            $Animes = $this->Jikan->getTopAnime(new TopAnimeRequest(1));

        }


        return view('livewire.animes',compact('Animes'));
    }
}
