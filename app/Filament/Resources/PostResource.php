<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationGroup = 'Modules';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('New Post')
                    ->schema([
                        Section::make('Content')
                            ->schema([
                                TextInput::make('title')
                                    ->live()
                                    ->afterStateUpdated(
                                        fn (Set $set, ?string $state) => $set('slug', Str::slug($state))
                                    )->columnSpanFull(),
                                TextInput::make('slug'),
                                RichEditor::make('content'),
                            ])->columnSpan(2),
                        Section::make('Meta')
                            ->schema([
                                FileUpload::make('thumbnail')
                                    ->hiddenLabel(true)
                                    ->image(),
                                Select::make('isPublished')
                                    ->label('Status')
                                    ->options([
                                        0 => 'Draft',
                                        1 => 'Publish'
                                    ])->required()
                                    ->searchable(),
                                Select::make('category_id')
                                    ->native(false)
                                    ->relationship(name: 'category', titleAttribute: 'name')
                                    ->createOptionForm([
                                        TextInput::make('name')
                                            ->required(),
                                        TextInput::make('slug')
                                            ->required(),
                                    ]),
                                TagsInput::make('tags'),

                            ])->grow(false)->columnSpan(1),
                    ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
