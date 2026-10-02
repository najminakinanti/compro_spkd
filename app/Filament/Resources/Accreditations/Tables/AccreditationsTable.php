<?php

namespace App\Filament\Resources\Accreditations\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AccreditationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(40),

                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('public')
                    ->size(50),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])

            ->recordActions([
                EditAction::make()->label(''),
                DeleteAction::make()->label(''),
            ])

            ->recordActionsColumnLabel('Actions')

            ->emptyStateHeading('Accreditation not found');
    }
}
