<?php

namespace App\Filament\Resources\CodeRabahCellResource\Pages;

use App\Filament\Resources\CodeRabahCellResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCodeRabahCell extends EditRecord
{
    protected static string $resource = CodeRabahCellResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
