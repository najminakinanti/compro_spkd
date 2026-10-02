<?php

namespace App\Filament\Resources\Compliances\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ComplianceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('year')
                    ->label('Year')
                    ->required()
                    ->maxLength(50),

                TextInput::make('category')
                    ->label('Category')
                    ->required()
                    ->maxLength(255),

                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }
}
