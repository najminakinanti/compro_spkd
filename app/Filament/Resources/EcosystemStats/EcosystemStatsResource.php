<?php

namespace App\Filament\Resources\EcosystemStats;

use App\Filament\Resources\EcosystemStats\Pages\CreateEcosystemStats;
use App\Filament\Resources\EcosystemStats\Pages\EditEcosystemStats;
use App\Filament\Resources\EcosystemStats\Pages\ListEcosystemStats;
use App\Filament\Resources\EcosystemStats\Schemas\EcosystemStatsForm;
use App\Filament\Resources\EcosystemStats\Tables\EcosystemStatsTable;
use App\Models\EcosystemStats;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class EcosystemStatsResource extends Resource
{
    protected static ?string $model = EcosystemStats::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedChartBar;

    protected static ?string $navigationLabel = 'Ecosystem Stats';

    protected static string|UnitEnum|null $navigationGroup = 'Website Content';

    protected static ?string $modelLabel = 'Ecosystem Stats';

    protected static ?string $pluralModelLabel = 'Ecosystem Stats';

    public static function form(Schema $schema): Schema
    {
        return EcosystemStatsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EcosystemStatsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEcosystemStats::route('/'),
            'create' => CreateEcosystemStats::route('/create'),
            'edit' => EditEcosystemStats::route('/{record}/edit'),
        ];
    }
}