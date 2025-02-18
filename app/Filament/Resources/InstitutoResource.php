<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstitutoResource\Pages;
use App\Filament\Resources\InstitutoResource\RelationManagers;
use App\Models\Instituto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use App\Models\Carrera;
use Filament\Forms\Get;
use Filament\Forms\Set;
class InstitutoResource extends Resource
{
    protected static ?string $model = Instituto::class;
    protected static ?string $navigationGroup = 'Management Academic';
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?int $navigationSort= 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('facultad_id')
                    ->relationship('facultad', 'nombre')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->afterStateUpdated(fn(Set $set)=> $set('carrera_id', null))
                    ->required(),
                Forms\Components\Select::make('carrera_id')
                    ->options(fn(Get $get): Collection => Carrera::query()->where('facultad_id', $get('facultad_id'))->pluck('nombre','id'))
                    ->searchable()
                    ->preload()
                    ->live(),
                Forms\Components\Textarea::make('direccion')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('web')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('enlace_facebook')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('enlace_maps')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('estado')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facultad_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('carrera_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('web')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('enlace_facebook')
                    ->searchable(),
                Tables\Columns\IconColumn::make('estado')
                    ->boolean(),
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
            'index' => Pages\ListInstitutos::route('/'),
            'create' => Pages\CreateInstituto::route('/create'),
            'edit' => Pages\EditInstituto::route('/{record}/edit'),
        ];
    }
}