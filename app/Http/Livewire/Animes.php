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

    public $page = 1;

    public function __construct()
    {
        $this->Jikan = new MalClient;
    }

    // seletion pages
    public function next($nextPage)
    {
        if($nextPage){
            $this->page++;
        }
    }

    public function previous()
    {
        if($this->page != 1 && $this->page >= 1){
            $this->page--;
        }
    }

    public function select($page)
    {
        $this->page = $page;
    }
    // end of selections
    public function RedirectToAnime($id)
    {
        return redirect(route('Anime.page',['id'=>$id]));
    }

    public function render()
    {
        $Animes = null;

        if(strlen($this->search) > 2){

            $Animes = $this->Jikan->getAnimeSearch(new AnimeSearchRequest($this->search,$this->page));

        }else{

            $Animes = $this->Jikan->getTopAnime(new TopAnimeRequest($this->page));

        }

        return view('livewire.animes',compact('Animes'));
    }
}
