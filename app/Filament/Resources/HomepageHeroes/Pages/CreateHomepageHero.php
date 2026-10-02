<?php

namespace App\Filament\Resources\HomepageHeroes\Pages;

use App\Filament\Resources\HomepageHeroes\HomepageHeroResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomepageHero extends CreateRecord
{
    protected static string $resource = HomepageHeroResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
