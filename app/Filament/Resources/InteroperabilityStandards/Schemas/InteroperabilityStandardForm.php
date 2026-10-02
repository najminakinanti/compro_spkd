<?php

namespace App\Filament\Resources\InteroperabilityStandards\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class InteroperabilityStandardForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
