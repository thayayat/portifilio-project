<?php

namespace App\Filament\Resources\WorkExperiences\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WorkExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('company')
                    ->required()
                    ->maxLength(255),

                TextInput::make('date_range')
                    ->label('Date Range (e.g., 2024 - 2025)')
                    ->maxLength(255),

                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),

                TagsInput::make('tags')
                    ->label('Tags (e.g. HTML5, TypeScript, JS)')
                    ->columnSpanFull(),

                TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers show first'),
            ]);
    }
}
