<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('role.name')
                    ->label('Role')
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->searchable()
            ->searchPlaceholder('Search account...')
            ->emptyStateHeading('Account not found')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->label(''),
                DeleteAction::make()->label(''),
            ])
            ->recordActionsColumnLabel('Actions');
    }
}
