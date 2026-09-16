<?php

namespace App\Filament\Resources\AboutGenerates\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Database\Schema\Blueprint;

class AboutGenerateForm
{
    public static function configure(Schema $schema):Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('profession')
                    ->default(null),
                TextInput::make('description')
                    ->default(null),
                TextInput::make('experience')
                    ->default(null),
                FileUpload::make('image')
                    ->default(null),
                FileUpload::make('resume')
                    ->default(null),
            ]);
    }
}


