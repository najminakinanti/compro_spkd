<?php

namespace App\Filament\Resources\DiscussionEmailTemplates\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class DiscussionEmailTemplatesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('solution_key')
                    ->label('Solution')
                    ->formatStateUsing(
                        fn (?string $state): string =>
                            $state ?: 'General'
                    )
                    ->searchable()
                    ->sortable(),

                TextColumn::make('subject')
                    ->label('Subject')
                    ->searchable()
                    ->wrap()
                    ->sortable(),

                TextColumn::make('recipient_email')
                    ->label('Recipient')
                    ->searchable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->searchable()
            ->searchPlaceholder('Search template...')
            ->emptyStateHeading('Data not found')
            ->recordActions([
                EditAction::make()->label(''),
                DeleteAction::make()->label(''),
            ])
            ->recordActionsColumnLabel('Actions');
    }
}
