<?php

namespace App\Filament\Resources\InteroperabilityStandards\Pages;

use App\Filament\Resources\InteroperabilityStandards\InteroperabilityStandardResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInteroperabilityStandards extends ListRecords
{
    protected static string $resource = InteroperabilityStandardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
