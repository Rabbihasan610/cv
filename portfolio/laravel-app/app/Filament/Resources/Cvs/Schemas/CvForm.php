<?php

namespace App\Filament\Resources\Cvs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CvForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('file_path')
                    ->required(),
                TextInput::make('version'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
