<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CompanyProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Company Name')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('work_hour')
                    ->label('Work Hour')
                    ->required()
                    ->maxLength(255),

                Textarea::make('address')
                    ->label('Address')
                    ->required()
                    ->rows(3),

                Textarea::make('short_description')
                    ->label('Short Description')
                    ->required()
                    ->rows(3),

                TextInput::make('about_title')
                    ->label('About Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('about_description')
                    ->label('About Description')
                    ->required()
                    ->rows(5),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('Phone')
                    ->tel()
                    ->required()
                    ->maxLength(20),
            ]);
    }
}
