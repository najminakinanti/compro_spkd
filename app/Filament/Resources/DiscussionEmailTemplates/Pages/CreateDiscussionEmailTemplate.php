<?php

namespace App\Filament\Resources\DiscussionEmailTemplates\Pages;

use App\Filament\Resources\DiscussionEmailTemplates\DiscussionEmailTemplateResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDiscussionEmailTemplate extends CreateRecord
{
    protected static string $resource = DiscussionEmailTemplateResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
