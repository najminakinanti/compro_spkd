<?php

namespace App\Filament\Resources\InteroperabilityStandards;

use App\Filament\Resources\InteroperabilityStandards\Pages\CreateInteroperabilityStandard;
use App\Filament\Resources\InteroperabilityStandards\Pages\EditInteroperabilityStandard;
use App\Filament\Resources\InteroperabilityStandards\Pages\ListInteroperabilityStandards;
use App\Filament\Resources\InteroperabilityStandards\Schemas\InteroperabilityStandardForm;
use App\Filament\Resources\InteroperabilityStandards\Tables\InteroperabilityStandardsTable;
use App\Models\InteroperabilityStandard;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InteroperabilityStandardResource extends Resource
{
    protected static ?string $model = InteroperabilityStandard::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedArrowsRightLeft;

    protected static ?string $navigationLabel = 'Interoperability Standards';

    // protected static string|UnitEnum|null $navigationGroup = 'Homepage';

    protected static ?string $modelLabel = 'Interoperability Standard';

    protected static ?string $pluralModelLabel = 'Interoperability Standards';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return InteroperabilityStandardForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InteroperabilityStandardsTable::configure($table);
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
            'index' => ListInteroperabilityStandards::route('/'),
            'create' => CreateInteroperabilityStandard::route('/create'),
            'edit' => EditInteroperabilityStandard::route('/{record}/edit'),
        ];
    }
}
