<?php

namespace App\Filament\Resources\AboutGenerates\Pages;

use App\Filament\Resources\AboutGenerates\AboutGenerateResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutGenerate extends EditRecord
{
    protected static string $resource = AboutGenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
