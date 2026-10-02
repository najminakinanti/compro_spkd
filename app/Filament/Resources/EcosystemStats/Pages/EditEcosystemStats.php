<?php

namespace App\Filament\Resources\EcosystemStats\Pages;

use App\Filament\Resources\EcosystemStats\EcosystemStatsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEcosystemStats extends EditRecord
{
    protected static string $resource = EcosystemStatsResource::class;

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
