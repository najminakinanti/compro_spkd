<?php

namespace App\Filament\Resources\Compliances;

use App\Filament\Resources\Compliances\Pages\CreateCompliance;
use App\Filament\Resources\Compliances\Pages\EditCompliance;
use App\Filament\Resources\Compliances\Pages\ListCompliances;
use App\Filament\Resources\Compliances\Schemas\ComplianceForm;
use App\Filament\Resources\Compliances\Tables\CompliancesTable;
use App\Models\Compliance;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ComplianceResource extends Resource
{
    protected static ?string $model = Compliance::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedDocumentCheck;

    protected static ?string $navigationLabel = 'Compliances';

    protected static string|UnitEnum|null $navigationGroup = 'Website Content';

    protected static ?string $modelLabel = 'Compliance';

    protected static ?string $pluralModelLabel = 'Compliances';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ComplianceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompliancesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCompliances::route('/'),
            'create' => CreateCompliance::route('/create'),
            'edit' => EditCompliance::route('/{record}/edit'),
        ];
    }
}
