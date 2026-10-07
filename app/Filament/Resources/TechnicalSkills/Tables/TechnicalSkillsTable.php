<?php

namespace App\Filament\Resources\TechnicalSkills\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TechnicalSkillsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->sortable(),

                TextColumn::make('category')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('percentage')
                    ->suffix('%')
                    ->sortable(),

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
