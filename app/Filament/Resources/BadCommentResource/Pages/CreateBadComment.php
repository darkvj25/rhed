<?php

namespace App\Filament\Resources\BadCommentResource\Pages;

use App\Filament\Resources\BadCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBadComment extends CreateRecord
{
    protected static string $resource = BadCommentResource::class;
}
