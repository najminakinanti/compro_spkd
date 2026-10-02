<?php

namespace App\Filament\Resources\DiscussionRequests;

use App\Filament\Resources\DiscussionRequests\Pages\EditDiscussionRequest;
use App\Filament\Resources\DiscussionRequests\Pages\ListDiscussionRequests;
use App\Filament\Resources\DiscussionRequests\Schemas\DiscussionRequestForm;
use App\Filament\Resources\DiscussionRequests\Tables\DiscussionRequestsTable;
use App\Models\DiscussionRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DiscussionRequestResource extends Resource
{
    protected static ?string $model = DiscussionRequest::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedChatBubbleLeftRight;

    protected static ?string $navigationLabel = 'Discussion Requests';

    protected static string|UnitEnum|null $navigationGroup = 'Discussion';

    protected static ?string $modelLabel = 'Discussion Request';

    protected static ?string $pluralModelLabel = 'Discussion Requests';

    protected static ?string $recordTitleAttribute = 'reference_number';

    public static function form(Schema $schema): Schema
    {
        return DiscussionRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DiscussionRequestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDiscussionRequests::route('/'),
            'edit' => EditDiscussionRequest::route('/{record}/edit'),
        ];
    }
}