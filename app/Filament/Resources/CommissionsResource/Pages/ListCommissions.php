<?php

namespace App\Filament\Resources\CommissionsResource\Pages;

use App\Filament\Resources\CommissionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommissions extends ListRecords
{
    protected static string $resource = CommissionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
