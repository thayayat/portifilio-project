<?php

namespace App\Filament\Resources\SoftSkills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SoftSkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('icon')
                    ->label('Font Awesome class (e.g. fas fa-comments)')
                    ->maxLength(255),

                TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers show first'),
            ]);
    }
}
