<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class NewsCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Category Name')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
