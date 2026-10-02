<?php

namespace App\Filament\Resources\DiscussionEmailTemplates;

use App\Filament\Resources\DiscussionEmailTemplates\Pages\CreateDiscussionEmailTemplate;
use App\Filament\Resources\DiscussionEmailTemplates\Pages\EditDiscussionEmailTemplate;
use App\Filament\Resources\DiscussionEmailTemplates\Pages\ListDiscussionEmailTemplates;
use App\Filament\Resources\DiscussionEmailTemplates\Schemas\DiscussionEmailTemplateForm;
use App\Filament\Resources\DiscussionEmailTemplates\Tables\DiscussionEmailTemplatesTable;
use App\Models\DiscussionEmailTemplate;
use BackedEnum;
use UnitEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DiscussionEmailTemplateResource extends Resource
{
    protected static ?string $model = DiscussionEmailTemplate::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedEnvelope;

    protected static ?string $navigationLabel = 'Discussion Email Templates';

    protected static string|UnitEnum|null $navigationGroup = 'Discussion';

    protected static ?string $modelLabel = 'Discussion Email Template';

    protected static ?string $pluralModelLabel = 'Discussion Email Templates';

    protected static ?string $recordTitleAttribute = 'subject';

    public static function form(Schema $schema): Schema
    {
        return DiscussionEmailTemplateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DiscussionEmailTemplatesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDiscussionEmailTemplates::route('/'),
            'create' => CreateDiscussionEmailTemplate::route('/create'),
            'edit' => EditDiscussionEmailTemplate::route('/{record}/edit'),
        ];
    }
}
