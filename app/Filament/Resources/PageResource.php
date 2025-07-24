<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use App\Filament\Resources\PageResource\Pages;
use Filament\Tables\Actions\ForceDeleteAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Strony tekstowe';

    protected static ?string $modelLabel = 'Strona tekstowa';

    protected static ?string $pluralModelLabel = 'Strony tekstowe';

    public static function getNavigationBadge(): ?string 
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Tytuł strony')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function($state, callable $set) {
                        $set('slug', Str::slug($state));
                    })
                    ->maxLength(255)
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->label('Treść strony')
                    ->columnSpanFull(),
                TextInput::make('meta_title')
                    ->label('Meta tytuł')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->default(null),
                TextInput::make('meta_description')
                    ->label('Meta opis')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->default(null),
                TextInput::make('meta_keywords')
                    ->label('Słowa kluczowe')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->default(null),
                TextInput::make('slug')
                    ->label('Url (tworzy się automatycznie)')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł strony')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data utworzenia')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Ostatnia aktualizacja')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
