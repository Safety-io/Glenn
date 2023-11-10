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
                    ->required()
                    ->options('Lefkosa')
                    ->options('Gazimagusa')
                    ->options('Girne')
                    ->options('Guzelyurt')
                    ->options('Lefke')
                    ->options('Yeni Iskele')
                    ->autofocus()
                    ->placeholder('City ex: Honolulu'),
                Select::make('standard')
                    ->required()
                    ->options('Studio')
                    ->options('1+1')
                    ->options('2+1')
                    ->options('3+1')
                    ->options('3+2')
                    ->options('4+1')
                    ->options('4+2')
                    ->options('Villa')
                    ->options('Room')
                    ->autofocus(),
                Select::make('monthly')
                    ->required()
                    ->options(['85', '100', '150', '200', '250', '300', '350', '400','450','500','550','600','650','700','750','800','850','900','950','1000'])
                    ->options('85')
                    ->options('100')
                    ->options('150')
                    ->options('200')

                    ->autofocus(),
                Select::make('rent')
                    ->options(['1', '2', '3', '4', '5','6','7','8','9','10','11','12'])
                    ->required(),
                Select::make('deposit')
                    ->required()
                    ->options(['1', '2', '3'])
                    ->autofocus() ,
                Select::make('commission')
                    ->required()
                    ->options(['1', '2', '3', '4'])
                    ->autofocus(),
                FileUpload::make('image')
                    ->required()
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetWidth('400')
                    ->imageResizeTargetHeight('400')
                    ->imageEditor()
                    ->maxSize(1024 * 1024 * 2) // 2MB
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

