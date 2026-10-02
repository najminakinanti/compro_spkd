<?php

namespace App\Filament\Resources\Accreditations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AccreditationForm
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

                TextInput::make('description')
                    ->label('Description')
                    ->required()
                    ->maxLength(1000),

                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->disk('public')
                    ->directory('accreditations')
                    ->imagePreviewHeight('100')
                    ->fetchFileInformation(false)
                    ->maxSize(2048)
                    ->required(),
            ]);
    }
}
