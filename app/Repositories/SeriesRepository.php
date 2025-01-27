<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;

class SeriesRepository
{
    public function addSeries(SeriesFormRequest $request): Series
    {
        try {
            DD::beginTransaction();
            $series = Series::create($request->all());
            $seasons = [];
            for ($i = 1; $i <= $request->seasonsQty; $i++) {
                $seasons[] = [
                    'series_id' => $series->id,
                    'number' => $i,
                ];
            }
            Season::insert($seasons);

            $episodes = [];
            foreach ($series->seasons as $season) {
                for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
                    $episodes[] = [
                        'season_id' => $season->id,
                        'number' => $j,
                    ];
                }
            }
            Episode::insert($episodes);
            DD::commit();
            return $series;
        } catch (\Throwable $th) {
            DD::rollBack();
            throw $th;
        }
    }
}
