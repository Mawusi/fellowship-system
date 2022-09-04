<?php

namespace App\Filament\Resources\SeniorCellResource\Pages;

use App\Filament\Resources\SeniorCellResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeniorCells extends ListRecords
{
    protected static string $resource = SeniorCellResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
