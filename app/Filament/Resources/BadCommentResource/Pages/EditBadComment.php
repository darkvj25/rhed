<?php

namespace App\Filament\Resources\BadCommentResource\Pages;

use App\Filament\Resources\BadCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBadComment extends EditRecord
{
    protected static string $resource = BadCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
