<?php

namespace App\Filament\Resources\AboutGenerates\Pages;

use App\Filament\Resources\AboutGenerates\AboutGenerateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutGenerates extends ListRecords
{
    protected static string $resource = AboutGenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
