<?php

namespace App\Http\Livewire;

use Jikan\Helper\Constants;
use Jikan\MyAnimeList\MalClient;
use Jikan\Request\Anime\AnimeRecommendationsRequest;
use Jikan\Request\Anime\AnimeStatsRequest;
use Jikan\Request\Top\TopAnimeRequest;
use Livewire\Component;

class Animes extends Component
{
    public $Search;

    private $Jikan;


    public function __construct()
    {
        $this->Jikan = new MalClient;
    }


    public function render()
    {
        // $TopOfAnimes = $this->Jikan->getTopAnime((new TopAnimeRequest(1,Constants::TOP_UPCOMING)));
        $TopOfAnimes = $this->Jikan->getAnimeRecommendations(new AnimeRecommendationsRequest(1));

        // $TopOfAnimes = $this->Jikan->getAnimeEpisodes(new AnimeEpis);

        return view('livewire.animes',compact('TopOfAnimes'));
    }
}
