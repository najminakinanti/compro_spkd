<?php

namespace App\Filament\Resources\DiscussionEmailTemplates\Pages;

use App\Filament\Resources\DiscussionEmailTemplates\DiscussionEmailTemplateResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDiscussionEmailTemplate extends EditRecord
{
    protected static string $resource = DiscussionEmailTemplateResource::class;

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
