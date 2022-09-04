<?php

namespace App\Filament\Resources\CellResource\Pages;

use App\Filament\Resources\CellResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCells extends ListRecords
{
    protected static string $resource = CellResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
