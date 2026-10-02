<?php

namespace App\Filament\Resources\DiscussionRequests\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DiscussionRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Request Information')
                    ->schema([
                        TextInput::make('reference_number')
                            ->label('Reference Number')
                            ->disabled(),

                        TextInput::make('solution_key')
                            ->label('Solution')
                            ->formatStateUsing(
                                fn (?string $state): string =>
                                    $state ?: 'General'
                            )
                            ->disabled(),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'new' => 'New',
                                'in_progress' => 'In Progress',
                                'completed' => 'Completed',
                                'cancelled' => 'Cancelled',
                            ])
                            ->required(),
                    ])
                    ->columns(3),

                Section::make('Requester')
                    ->schema([
                        TextInput::make('name')
                            ->disabled(),

                        TextInput::make('email')
                            ->disabled(),

                        TextInput::make('phone')
                            ->disabled(),

                        TextInput::make('role')
                            ->disabled(),

                        TextInput::make('institution')
                            ->disabled(),
                    ])
                    ->columns(2),

                Section::make('Discussion')
                    ->schema([
                        Textarea::make('message')
                            ->disabled()
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}