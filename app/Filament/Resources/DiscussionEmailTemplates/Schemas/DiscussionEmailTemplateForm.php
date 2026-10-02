<?php

namespace App\Filament\Resources\DiscussionEmailTemplates\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;

class DiscussionEmailTemplateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Email Configuration')
                    ->schema([
                        TextInput::make('solution_key')
                            ->label('Solution Key')
                            ->placeholder('Leave empty for General Discussion')
                            ->helperText(
                                'Example: transeca, transcpg. Leave empty if this template is for general discussion.'
                            )
                            ->maxLength(255),

                        TextInput::make('recipient_email')
                            ->label('Recipient Email')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        TextInput::make('subject')
                            ->label('Email Subject')
                            ->required()
                            ->maxLength(255)
                            ->helperText(
                                'Available: {{reference_number}}, {{solution_name}}, {{name}}'
                            ),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),

                Section::make('Email Body')
                    ->schema([
                        RichEditor::make('body')
                            ->label('Body')
                            ->required()
                            ->columnSpanFull()
                            ->helperText(
                                'Available: {{reference_number}}, {{solution_name}}, {{name}}, {{email}}, {{phone}}, {{role}}, {{institution}}, {{message}}, {{created_at}}'
                            ),
                    ]),
            ]);
    }
}
