<?php

namespace App\Filament\Resources\BadCommentResource\Pages;

use App\Filament\Resources\BadCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBadComments extends ListRecords
{
    protected static string $resource = BadCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
