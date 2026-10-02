<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use App\Models\NewsCategory;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Information')
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set(
                                    'slug',
                                    \Illuminate\Support\Str::slug($state)
                                );
                            }),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Select::make('category_id')
                            ->label('Category')
                            ->options(
                                NewsCategory::query()
                                    ->where('is_active', true)
                                    ->pluck('name', 'unique_id')
                            )
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('author')
                            ->label('Author')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('reading_time')
                            ->label('Reading Time')
                            ->numeric()
                            ->minValue(1)
                            ->suffix('minutes'),

                        FileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->image()
                            ->disk('public')
                            ->directory('news')
                            ->imageEditor()
                            ->columnSpanFull(),

                        RichEditor::make('excerpt')
                            ->label('Excerpt')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Article Content')
                    ->schema([
                        Builder::make('content')
                            ->label('Content')
                            ->blocks([
                                Builder\Block::make('summary')
                                    ->label('Summary')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Summary')
                                            ->required()
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'link',
                                            ]),
                                    ]),

                                Builder\Block::make('heading')
                                    ->label('Heading')
                                    ->schema([
                                        TextInput::make('content')
                                            ->label('Heading')
                                            ->required()
                                            ->maxLength(255),
                                    ]),

                                Builder\Block::make('paragraph')
                                    ->label('Paragraph')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Paragraph')
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),

                                Builder\Block::make('points')
                                    ->label('Points')
                                    ->schema([
                                        Repeater::make('items')
                                            ->label('Items')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Title')
                                                    ->required(),

                                                RichEditor::make('description')
                                                    ->label('Description')
                                                    ->required()
                                                    ->toolbarButtons([
                                                        'bold',
                                                        'italic',
                                                        'link',
                                                    ]),
                                            ])
                                            ->columns(2)
                                            ->addActionLabel('Add Point')
                                            ->reorderable()
                                            ->collapsible(),
                                    ]),

                                Builder\Block::make('quote')
                                    ->label('Quote')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Quote')
                                            ->required()
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ]),
                                    ]),

                                Builder\Block::make('image')
                                    ->label('Image')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Image')
                                            ->image()
                                            ->disk('public')
                                            ->directory('news/content')
                                            ->imageEditor()
                                            ->required(),

                                        TextInput::make('caption')
                                            ->label('Caption')
                                            ->maxLength(255),
                                    ]),
                            ])
                            ->addActionLabel('Add Content Block')
                            ->reorderable()
                            ->collapsible()
                            ->cloneable()
                            ->columnSpanFull(),
                    ]),

                Section::make('Publication')
                    ->schema([
                        Toggle::make('is_featured')
                            ->label('Featured Article')
                            ->default(false),

                        Toggle::make('is_published')
                            ->label('Published')
                            ->default(false)
                            ->live(),

                        DateTimePicker::make('published_at')
                            ->label('Published At')
                            ->seconds(false)
                            ->visible(fn ($get) => $get('is_published')),
                    ])
                    ->columns(3),
            ]);
    }
}
