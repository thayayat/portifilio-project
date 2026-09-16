<?php

namespace App\Filament\Resources\Skills\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class SkillsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->circular(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->badge()
                    ->colors([
                        'primary' => 'frontend',
                        'success' => 'backend',
                        'warning' => 'fullstack',
                        'danger' => 'devops',
                        'info' => 'database',
                        'secondary' => 'mobile',
                        'gray' => 'other',
                    ])
                    ->sortable(),

                TextColumn::make('color')
                    ->label('Color Class')
                    ->badge(),

                TextColumn::make('proficiency')
                    ->label('Proficiency')
                    ->suffix('%')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('display_order')
                    ->label('Order')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'frontend' => 'Frontend',
                        'backend' => 'Backend',
                        'fullstack' => 'Full Stack',
                        'devops' => 'DevOps',
                        'database' => 'Database',
                        'mobile' => 'Mobile',
                        'other' => 'Other',
                    ]),

                TernaryFilter::make('is_active')
                    ->label('Active Status'),
            ])
            ->defaultSort('display_order', 'asc')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
