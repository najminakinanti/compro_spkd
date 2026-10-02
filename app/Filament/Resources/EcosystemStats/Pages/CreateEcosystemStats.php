<?php

namespace App\Filament\Resources\EcosystemStats\Pages;

use App\Filament\Resources\EcosystemStats\EcosystemStatsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEcosystemStats extends CreateRecord
{
    protected static string $resource = EcosystemStatsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
