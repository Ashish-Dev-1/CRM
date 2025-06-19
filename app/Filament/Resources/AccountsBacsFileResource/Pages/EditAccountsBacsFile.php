<?php

namespace App\Filament\Resources\AccountsBacsFileResource\Pages;

use App\Filament\Resources\AccountsBacsFileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccountsBacsFile extends EditRecord
{
    protected static string $resource = AccountsBacsFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
