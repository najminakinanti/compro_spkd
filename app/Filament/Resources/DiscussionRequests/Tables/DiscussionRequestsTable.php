<?php

namespace App\Filament\Resources\DiscussionRequests\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DiscussionRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('reference_number')
                    ->label('Reference')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('solution_key')
                    ->label('Solution')
                    ->formatStateUsing(
                        fn (?string $state): string =>
                            $state ?: 'General'
                    )
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('institution')
                    ->label('Institution')
                    ->searchable()
                    ->wrap(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->searchable()
            ->searchPlaceholder('Search discussion request...')
            ->emptyStateHeading('Data not found')
            ->recordActions([
                EditAction::make()->label(''),
            ])
            ->recordActionsColumnLabel('Actions');
    }
}