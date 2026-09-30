<?php

namespace App\Filament\Resources\ResumeItems\Pages;

use App\Filament\Resources\ResumeItems\ResumeItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditResumeItem extends EditRecord
{
    protected static string $resource = ResumeItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
