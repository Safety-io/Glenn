<?php

namespace App\Filament\Resources\CommissionsResource\Pages;

use App\Filament\Resources\CommissionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommissions extends EditRecord
{
    protected static string $resource = CommissionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
