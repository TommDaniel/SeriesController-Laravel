<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use App\Repositories\EpisodeRepository;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function index(Season $season){

        return view('episodes.index', ['episodes' => $season->episodes , 'mensagem.sucesso' => session('mensagem.sucesso')]);
    }
    public function update(Request $request, Season $season, EpisodeRepository $episodeRepository)
    {
        $mensagem = $episodeRepository->episodeWatched($request, $season);

        return to_route('series.index')->with('mensagem.sucesso', $mensagem);
    }

}
