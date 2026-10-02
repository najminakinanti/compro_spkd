<?php

namespace App\Filament\Resources\HomepageHeroes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class HomepageHeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge')
                    ->label('Badge')
                    ->required()
                    ->maxLength(255),

                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->rows(4),

                Repeater::make('images')
                    ->label('Hero Images')
                    ->relationship()
                    ->schema([
                        FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('homepage/hero')
                            ->required(),

                        Textarea::make('description')
                            ->label('Image Description')
                            ->rows(3),
                    ])
                    ->addActionLabel('Add Image')
                    ->collapsible()
                    ->reorderable()
                    ->columnSpanFull(),
            ]);
    }
}
