<?php

namespace App\Filament\Widgets;

use App\Models\BadComment;
use App\Models\Event;
use App\Models\Faculty;
use App\Models\News;
use App\Models\Report;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Reports', Report::count()),
            Stat::make('Faculties', Faculty::count()),
            Stat::make('Events', Event::count()),
            Stat::make('News', News::count()),
            Stat::make('User', User::count()),
            Stat::make('Bad Comments', BadComment::count()),

        ];
    }
}
