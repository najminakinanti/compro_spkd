<?php

namespace App\Filament\Resources\DiscussionRequests\Pages;

use App\Filament\Resources\DiscussionRequests\DiscussionRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDiscussionRequest extends EditRecord
{
    protected static string $resource = DiscussionRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
