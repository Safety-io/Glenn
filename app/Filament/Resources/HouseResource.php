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
                Select::make('city')
                    ->options(function () {
                        return House::all()->pluck('city', 'city');
                    }),
                Select::make('standard')
                    ->options(function () {
                        return House::all()->pluck('standard', 'standard');
                    }),
                Select::make('monthly')
                    ->options(function () {
                        return House::all()->pluck('monthly', 'monthly');
                    }),
                Select::make('rent')
                    ->options(function () {
                        return House::all()->pluck('rent', 'rent');
                    }),
                Select::make('deposit')
                    ->options(function () {
                        return House::all()->pluck('deposit', 'deposit');
                    }),
                Select::make('commission')
                    ->options(function () {
                        return House::all()->pluck('commission', 'commission');
                    }),
                FileUpload::make('image')
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetWidth('400')
                    ->imageResizeTargetHeight('400')
                    ->imageEditor()
                    ->maxSize(1024 * 1024 * 2) // 2MB
                    ->image()
                    ->directory(config('image_upload_path')),
                Select::make('house_statue')
                    ->options(function () {
                        return House::all()->pluck('house_statue', 'house_statue');
                    }),
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

