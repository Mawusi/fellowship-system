<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Zone;
use Filament\Tables;
use App\Models\Member;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MemberResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MemberResource\RelationManagers;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()
                    ->schema([
                        TextInput::make('name')->required()->maxLength(255),
                        TextInput::make('contact')->required()->maxLength(255),
                        TextInput::make('occupation')->required()->maxLength(255),
                        DatePicker::make('dob')->label('Birth day')->required(),
                        TextInput::make('email')->email()->required()->maxLength(255),
                        TextInput::make('location')->required()->maxLength(255),

                        Select::make('status_id')
                            ->relationship('status', 'name')->required(),

                        Select::make('zone_id')
                            ->relationship('zone', 'name')->required(),

                        // Dependent fields for country->states->cities
                        // Select::make('zone_id')
                        //     ->label('Zone')
                        //     ->options(Zone::all()->pluck('name', 'id')->toArray())
                        //     ->required()
                        //     ->reactive(),
                            // ->afterStateUpdated(fn (callable $set) => $set('church_id', null))
                            


                        //     Select::make('church_id')
                        //         ->label("Church's name")
                        //         ->required()
                        //         ->options(function(callable $get){
                        //             $zone = Zone::find($get('zone_id'));
                        //                 if(!$zone){
                        //                     return Church::all()->pluck('name', 'id');
                        //                 }
                        //             return $zone->churches->pluck('name', 'id');
                        //         })
                        //         ->reactive(),
                                
                        //         Select::make('group_id')
                        //             ->label("Group's name")
                        //             ->required()
                        //             ->options(function(callable $get){
                        //                 $church = Church::find($get('church_id'));
                        //                     if(!$church){
                        //                         return Group::all()->pluck('name', 'id');
                        //                     }
                        //                 return $church->groups->pluck('name', 'id');
                        //             })
                        //             ->reactive(),

                        //             Select::make('pastoral_care_fellowship_id')
                        //             ->label("PCF's name")
                        //             ->required()
                        //             ->options(function(callable $get){
                        //                 $group = Group::find($get('group_id'));
                        //                     if(!$group){
                        //                         return PastoralCareFellowship::all()->pluck('name', 'id');
                        //                     }
                        //                 return $group->pastoral_care_fellowships->pluck('name', 'id');
                        //                 })
                        //                 ->reactive(),

                        //                 Select::make('cell_id')
                        //                 ->label("Cell's name")
                        //                 ->required()
                        //                 ->options(function(callable $get){
                        //                     $pcf = PastoralCareFellowship::find($get('pastoral_care_fellowship_id'));
                        //                         if(!$pcf){
                        //                             return Cell::all()->pluck('name', 'id');
                        //                         }
                        //                     return $pcf->cells->pluck('name', 'id');
                        //                 })
                        //                 ->reactive(),

                        //                 Select::make('bible_study_class_group_id')
                        //                 ->label("Bible Study Class Group")
                        //                 ->required()
                        //                 ->options(function(callable $get){
                        //                     $cell = Cell::find($get('cell_id'));
                        //                         if(!$cell){
                        //                             return BibleStudyClassGroup::all()->pluck('name', 'id');
                        //                         }
                        //                     return $cell->bible_study_class_groups->pluck('name', 'id');
                        //                 })
                        //                 ->reactive(),

                        //                 Select::make('designation_id')
                        //                 ->relationship('designation', 'name')->required(),
                                        
                        //                 TextInput::make('location')
                        //                 ->required()
                        //                 ->label('Cell location')
                        //                 ->maxLength(255)                
                        
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }    
}
