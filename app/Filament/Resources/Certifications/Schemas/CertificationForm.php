<?php

namespace App\Filament\Resources\Certifications\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CertificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

            TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('course_title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                // Makes this field take the full width
                TextInput::make('organization')
                    ->required()
                    ->maxLength(255),

                TextInput::make('provider')
                    ->required()
                    ->maxLength(255),

                Select::make('category')
                    ->options([
                        'Professional' => 'Professional',
                        'completed' => 'Completed',
                        'complete' => 'Complete',
                    ])
                    ->required(),

               
                TextInput::make('date_range')
                    ->label('Date Range (e.g., May 2023 - May 2025)')
                    ->maxLength(255),

                TextInput::make('start_date')
                    ->label('Start Date (e.g., Started august 2025)')
                    ->maxLength(255),



                FileUpload::make('image_path')

                    ->directory('images/certifications')
                    ->required(),

                TextInput::make('description')
                    ->maxLength(255),

            ]);
    }
}
