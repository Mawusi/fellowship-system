<?php

namespace App\Filament\Resources\SeniorCellResource\Pages;

use App\Filament\Resources\SeniorCellResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeniorCell extends EditRecord
{
    protected static string $resource = SeniorCellResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
