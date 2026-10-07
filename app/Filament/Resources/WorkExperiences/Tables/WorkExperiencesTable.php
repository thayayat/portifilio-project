<?php

namespace App\Filament\Resources\WorkExperiences\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WorkExperiencesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->sortable(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('company')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('date_range'),

                TextColumn::make('tags')
                    ->badge()
                    ->separator(','),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order');
    }
}
