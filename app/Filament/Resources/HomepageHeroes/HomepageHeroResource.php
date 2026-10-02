<?php

namespace App\Filament\Resources\HomepageHeroes;

use App\Filament\Resources\HomepageHeroes\Pages\CreateHomepageHero;
use App\Filament\Resources\HomepageHeroes\Pages\EditHomepageHero;
use App\Filament\Resources\HomepageHeroes\Pages\ListHomepageHeroes;
use App\Filament\Resources\HomepageHeroes\Schemas\HomepageHeroForm;
use App\Filament\Resources\HomepageHeroes\Tables\HomepageHeroesTable;
use App\Models\HomepageHero;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HomepageHeroResource extends Resource
{
    protected static ?string $model = HomepageHero::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedPhoto;

    protected static ?string $navigationLabel = 'Homepage Hero';

    // protected static string|UnitEnum|null $navigationGroup = 'Homepage';

    protected static ?string $modelLabel = 'Homepage Hero';

    protected static ?string $pluralModelLabel = 'Homepage Hero';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HomepageHeroForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomepageHeroesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHomepageHeroes::route('/'),
            'create' => CreateHomepageHero::route('/create'),
            'edit' => EditHomepageHero::route('/{record}/edit'),
        ];
    }
}