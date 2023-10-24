<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HouseResource\Pages;
use App\Models\House;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HouseResource extends Resource
{
    protected static ?string $model = House::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->autofocus()
                    ->required()
                    ->unique(),

                TextInput::make('address')
                    ->required(),

                TextInput::make('rooms')
                    ->required()
                    ->type('number'),

                TextInput::make('bathrooms')
                    ->required()
                    ->type('number'),

                TextInput::make('price')
                    ->required()
                    ->type('number'),

                FileUpload::make('image')
                    ->required()
//                    ->multiple()
                    ->image()
                    ->directory('houses')
//                    ->acceptedFileTypes(['image/*'])
//                    ->enableReordering()
//                    ->enableDownload()
//                    ->storeFileNamesIn('image')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('address')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('rooms')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('bathrooms')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListHouses::route('/'),
            'create' => Pages\CreateHouse::route('/create'),
            'edit' => Pages\EditHouse::route('/{record}/edit'),
        ];
    }
}

