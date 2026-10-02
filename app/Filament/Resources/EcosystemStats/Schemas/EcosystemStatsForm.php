<?php

namespace App\Filament\Resources\EcosystemStats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EcosystemStatsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('module_count')
                    ->label('Module Count')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('client_count')
                    ->label('Client Count')
                    ->numeric()
                    ->minValue(0)
                    ->required(),
            ]);
    }
}
