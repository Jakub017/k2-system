<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\ForceDeleteAction;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
use App\Filament\Exports\ProductExporter;
use Filament\Tables\Actions\ExportBulkAction;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    protected static ?string $navigationLabel = 'Produkty';

    protected static ?string $modelLabel = 'Produkt';

    protected static ?string $pluralModelLabel = 'Produkty';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Ilość produktów';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('active')
                    ->label('Aktywny?'),
                Toggle::make('bestseller')
                    ->label('Bestseller?'),
                FileUpload::make('thumbnail')
                    ->label('Zdjęcie główne'),
                FileUpload::make('images')
                    ->label('Zdjęcia')
                    ->multiple()
                    ->maxParallelUploads(5),
                TextInput::make('name')
                    ->label('Nazwa produktu')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    })
                    ->columnSpanFull(),
                RichEditor::make('short_description')
                    ->label('Krótki opis')
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->label('Pełny opis')
                    ->columnSpanFull(),
                TextInput::make('quantity')
                    ->label('Ilość')
                    ->numeric()
                    ->default(null),
                TextInput::make('price')
                    ->label('Cena')
                    ->required()
                    ->numeric()
                    ->suffix('zł'),
                TextInput::make('slug')
                    ->label('Url (tworzy się automatycznie)')
                    ->required()
                    ->prefix('ksero-k2system.pl/produtkt/')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Zdjęcie główne'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa produktu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Cena')
                    ->money('PLN')
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->label('Ilość')
                    ->numeric()
                    ->sortable(),
                ToggleColumn::make('active')
                    ->label('Aktywny?'),
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
                    ExportBulkAction::make()
                        ->exporter(ProductExporter::class)
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
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
