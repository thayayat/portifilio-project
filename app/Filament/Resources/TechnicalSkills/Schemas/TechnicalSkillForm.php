<?php

namespace App\Filament\Resources\TechnicalSkills\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TechnicalSkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category')
                    ->required()
                    ->maxLength(255),

                TextInput::make('percentage')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->suffix('%')
                    ->required(),

                TagsInput::make('tags')
                    ->label('Tags (e.g. React, Vue.js, Tailwind CSS)')
                    ->columnSpanFull(),

                TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers show first'),
            ]);
    }
}
