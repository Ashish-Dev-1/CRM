<?php

namespace App\Filament\Resources\AccountsBacsFileResource\Pages;

use App\Filament\Resources\AccountsBacsFileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccountsBacsFiles extends ListRecords
{
    protected static string $resource = AccountsBacsFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
