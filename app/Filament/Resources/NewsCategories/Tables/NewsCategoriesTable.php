<?php

namespace App\Filament\Resources\NewsCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class NewsCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->searchable()
            ->searchPlaceholder('Search category...')
            ->emptyStateHeading('Data not found')
            ->recordActions([
                EditAction::make()->label(''),
                DeleteAction::make()->label(''),
            ])
            ->recordActionsColumnLabel('Actions');
    }
}
