<?php

namespace App\Filament\Resources\AboutGenerates;

use App\Filament\Resources\AboutGenerates\Pages\CreateAboutGenerate;
use App\Filament\Resources\AboutGenerates\Pages\EditAboutGenerate;
use App\Filament\Resources\AboutGenerates\Pages\ListAboutGenerates;
use App\Filament\Resources\AboutGenerates\Schemas\AboutGenerateForm;
use App\Filament\Resources\AboutGenerates\Tables\AboutGeneratesTable;
use App\Models\AboutGenerate;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutGenerateResource extends Resource
{
    protected static ?string $model = AboutGenerate::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';
     protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return AboutGenerateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutGeneratesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutGenerates::route('/'),
            'create' => CreateAboutGenerate::route('/create'),
            'edit' => EditAboutGenerate::route('/{record}/edit'),
        ];
    }
}
