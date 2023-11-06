<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HouseResource\Pages;
use App\Models\House;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
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
                TextInput::make('address')
                    ->required()
                    ->autofocus()
                    ->placeholder('Address ex: 1154 Fort Street Mall'),
                TextInput::make('city')
                    ->required()
                    ->autofocus()
                    ->placeholder('City ex: Honolulu'),
                TextInput::make('standard')
                    ->required()
                    ->autofocus()
                    ->placeholder('Standard ex: 1 bedroom'),
                TextInput::make('monthly')
                    ->required()
                    ->autofocus()
                    ->placeholder('Monthly ex: 1,000'),
                TextInput::make('rent')
                    ->required()
                    ->autofocus()
                    ->placeholder('Rent ex: 1,000'),
                TextInput::make('deposit')
                    ->required()
                    ->autofocus()
                    ->placeholder('Deposit ex: 1,000'),
                TextInput::make('commission')
                    ->required()
                    ->autofocus()
                    ->placeholder('Commission ex: 1,000'),
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->directory(config('image_upload_path')),

                Select::make('house_statue')
                    ->default('Available')
                    ->options(['Available', 'Unavailable'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('standard')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('monthly')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rent')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deposit')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('commission')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('house_statue')
                    ->searchable()
                    ->sortable(),

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

