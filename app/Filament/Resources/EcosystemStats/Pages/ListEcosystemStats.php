<?php

namespace App\Filament\Resources\EcosystemStats\Pages;

use App\Filament\Resources\EcosystemStats\EcosystemStatsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEcosystemStats extends ListRecords
{
    protected static string $resource = EcosystemStatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
