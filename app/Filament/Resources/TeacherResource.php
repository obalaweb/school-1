<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationGroup = 'Modules';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('New Teacher')
                    ->schema([
                        Select::make('user_id')
                            ->native(false)
                            ->relationship(name: 'user', titleAttribute: 'name'),
                        TextInput::make('specialty'),
                        TextInput::make('experience'),
                        TextInput::make('education'),
                        RichEditor::make('about'),
                        Repeater::make('skills')
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('description')
                                    ->required(),
                                TextInput::make('link')
                                    ->required(),
                            ])->maxItems(3),
                        Repeater::make('awards')
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('description')
                                    ->required(),
                                TextInput::make('link')
                                    ->required(),
                            ])->maxItems(4),
                        Repeater::make('social')
                            ->schema([
                                Select::make('type')
                                    ->options([
                                        0 => 'Facebook',
                                        1 => 'Twitter',
                                        2 => 'LinkedIn'
                                    ])->required()
                                    ->searchable(),
                                TextInput::make('link')
                                    ->required()
                                    ->url(),
                            ])->maxItems(3)->unique(),
                    ])->columns(2),
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
