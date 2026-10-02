<?php

namespace App\Filament\Resources\DiscussionEmailTemplates\Pages;

use App\Filament\Resources\DiscussionEmailTemplates\DiscussionEmailTemplateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDiscussionEmailTemplates extends ListRecords
{
    protected static string $resource = DiscussionEmailTemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
