<?php

namespace App\Filament\Resources\ResumeItems;

use App\Filament\Resources\ResumeItems\Pages\CreateResumeItem;
use App\Filament\Resources\ResumeItems\Pages\EditResumeItem;
use App\Filament\Resources\ResumeItems\Pages\ListResumeItems;
use App\Filament\Resources\ResumeItems\Schemas\ResumeItemForm;
use App\Filament\Resources\ResumeItems\Tables\ResumeItemsTable;
use App\Models\ResumeItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ResumeItemResource extends Resource
{
    protected static ?string $model = ResumeItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ResumeItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ResumeItemsTable::configure($table);
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
            'index' => ListResumeItems::route('/'),
            'create' => CreateResumeItem::route('/create'),
            'edit' => EditResumeItem::route('/{record}/edit'),
        ];
    }
}
