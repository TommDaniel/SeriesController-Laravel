<?php

namespace App\Repositories;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodeRepository
{
    public function episodeWatched(Request $request, Season $season): string
    {
        try {
            DB::beginTransaction();
            $watchedEpisodes = $request->episodes ?? [];

            $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
                $episode->watched = in_array($episode->id, $watchedEpisodes);
                $episode->save();
            });
            DB::commit();
            return 'Episódios marcados como assistidos!';
        }catch (\Exception $exception){
            DB::rollBack();
            return $exception->getMessage();
        }
    }
}
