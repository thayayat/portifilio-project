<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->default(null),
                TextInput::make('address')
                    ->default(null),
                TextInput::make('bio')
                    ->default(null),
                FileUpload::make('profile_picture')
                    ->default(null),
                TextInput::make('github')
                    ->url()
                    ->default(null),
                TextInput::make('linkedin')
                    ->url()
                    ->default(null),
                TextInput::make('facebook')
                    ->url()
                    ->default(null),
                TextInput::make('instagram')
                    ->url()
                    ->default(null),
                TextInput::make('whatsapp')
                    ->tel()
                    ->default(null),
            ]);
    }
}
