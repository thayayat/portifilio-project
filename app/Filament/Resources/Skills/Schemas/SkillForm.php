<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Slider;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter skill name'),

                  FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('skills')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->placeholder('Upload skill image'),

                TextInput::make('color')
                    ->label('Color Class')
                    ->placeholder('yellow-400'),

                Select::make('category')
                    ->options([
                        'frontend' => 'Frontend',
                        'backend' => 'Backend',
                        'fullstack' => 'Full Stack',
                        'devops' => 'DevOps',
                        'database' => 'Database',
                        'mobile' => 'Mobile',
                        'other' => 'Other'
                    ])
                    ->required()
                    ->default('frontend'),

                Slider::make('proficiency')
                  ->range(minValue: 0, maxValue: 100)
                    ->default(80),

                Toggle::make('is_active')
                    ->default(true),

                TextInput::make('display_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
