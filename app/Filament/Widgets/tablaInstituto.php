<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Instituto;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Action;
use Filament\Widgets\Tables\Columns;
use Filament\Widgets\Tables\Actions;


class tablaInstituto extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Instituto::query()
            )
            ->columns([
                TextColumn::make('nombre')
                    ->label('Instituto')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('facultad.nombre'),
                TextColumn::make('carrera.nombre'),
                // Agregar columna con el botón PDF
            ])
            ->actions([
                Tables\Actions\Action::make('descargar_pdf')
                    ->label('PDF')
                    ->icon('heroicon-o-document-arrow-down') // Icono opcional
                    ->color('danger')
                    ->button()
                    ->url(fn (Instituto $record) => route('instituto.pdf', $record), true)
                    ->openUrlInNewTab(),
            ]);
    }
}
