<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvestigacionResource\Pages;
use App\Filament\Resources\InvestigacionResource\RelationManagers;
use App\Models\Investigacion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvestigacionResource extends Resource
{
    protected static ?string $model = Investigacion::class;
    protected static ?string $label = 'Investigaciones';
    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('instituto_id')
                    ->relationship('instituto', 'nombre')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->required(),
                Forms\Components\Select::make('tipo_investigacion_id')
                    ->relationship('tipoInvestigacion', 'tipo')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->required(),
                Forms\Components\TextInput::make('nombre')
                    ->label("Titulo de la Investigación")
                    ->required()
                    ->maxLength(500),
                Forms\Components\RichEditor::make('descripcion')
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instituto_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo_investigacion_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListInvestigacions::route('/'),
            'create' => Pages\CreateInvestigacion::route('/create'),
            'edit' => Pages\EditInvestigacion::route('/{record}/edit'),
        ];
    }
}