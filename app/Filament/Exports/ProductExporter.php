<?php

namespace App\Filament\Exports;

use App\Models\Product;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class ProductExporter extends Exporter
{
    protected static ?string $model = Product::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('name')
                ->label('Nazwa produktu'),
            ExportColumn::make('short_description')
                ->label('Krótki opis'),
            ExportColumn::make('content')
                ->label('Pełny opis'),
            ExportColumn::make('quantity')
                ->label('Ilość'),
            ExportColumn::make('price')
                ->label('Cena'),
            ExportColumn::make('created_at')
                ->label('Data utworzenia'),
            ExportColumn::make('updated_at')
                ->label('Data edycji'),
            ExportColumn::make('deleted_at')
                ->label('Data usunęcia'),
            ExportColumn::make('sku')
                ->label('SKU'),
            ExportColumn::make('slug')
                ->label('Slug'),
            ExportColumn::make('active')
                ->label('Aktywny?'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Twój eksport produktów zakończył się sukcesem.' . number_format($export->successful_rows) . ' ' . str('rekordów')->plural($export->successful_rows) . ' zostało wyeksportowane.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
