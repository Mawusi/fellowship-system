<?php

namespace App\Filament\Resources\CodeRabahCellResource\Pages;

use App\Filament\Resources\CodeRabahCellResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCodeRabahCells extends ListRecords
{
    protected static string $resource = CodeRabahCellResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
