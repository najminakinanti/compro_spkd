<?php

namespace App\Filament\Resources\CompanyProfiles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CompanyProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('CompanyName')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->verticallyAlignStart(),

                TextColumn::make('work_hour')
                    ->label('Work Hour')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->verticallyAlignStart(),

                TextColumn::make('address')
                    ->label('Address')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->verticallyAlignStart(),

                TextColumn::make('short_description')
                    ->label('Short Description')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->verticallyAlignStart(),

                TextColumn::make('about_title')
                    ->label('About Title')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->verticallyAlignStart(),

                TextColumn::make('about_description')
                    ->label('About Description')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->verticallyAlignStart(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->verticallyAlignStart(),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->sortable()
                    ->verticallyAlignStart(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->verticallyAlignStart(),
            ])
            ->searchable()
            ->searchPlaceholder('Search account...')
            ->emptyStateHeading('Data not found')
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
