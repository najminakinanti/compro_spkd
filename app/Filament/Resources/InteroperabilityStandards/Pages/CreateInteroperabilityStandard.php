<?php

namespace App\Filament\Resources\InteroperabilityStandards\Pages;

use App\Filament\Resources\InteroperabilityStandards\InteroperabilityStandardResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInteroperabilityStandard extends CreateRecord
{
    protected static string $resource = InteroperabilityStandardResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
