<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Cell;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CellResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CellResource\RelationManagers;

class CellResource extends Resource
{
    protected static ?string $model = Cell::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()
                ->schema([
                    
                    TextInput::make('leader')
                    ->required()->maxLength(255),

                    TextInput::make('name')
                    ->label('Name of cell')
                    ->required()->maxLength(255),

                    Select::make('senior_cell_id')
                        ->relationship('senior_cell', 'name')->required(),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 // TextColumn::make('id')->sortable(),
                 TextColumn::make('leader')->sortable()->searchable(),
                 TextColumn::make('name')->label("Cell name")->sortable()->searchable(),
                 TextColumn::make('senior_cell.name')->sortable()->searchable(),
                 TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListCells::route('/'),
            // 'create' => Pages\CreateCell::route('/create'),
            'edit' => Pages\EditCell::route('/{record}/edit'),
        ];
    }    
}
