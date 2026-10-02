<?php

namespace App\Filament\Resources\InteroperabilityStandards\Pages;

use App\Filament\Resources\InteroperabilityStandards\InteroperabilityStandardResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInteroperabilityStandard extends EditRecord
{
    protected static string $resource = InteroperabilityStandardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
