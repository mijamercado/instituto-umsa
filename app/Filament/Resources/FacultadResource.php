<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacultadResource\Pages;
use App\Filament\Resources\FacultadResource\RelationManagers;
use App\Models\Facultad;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacultadResource extends Resource
{
    protected static ?string $model = Facultad::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->label('Nombre de la Facultad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('direccion')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('web')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->maxSize(1024)
                    ->directory('logos')
                    ->default(null),
                Forms\Components\TextInput::make('enlace_facebook')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('enlace_maps')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('estado')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('web')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('enlace_facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('enlace_maps')
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
            'index' => Pages\ListFacultads::route('/'),
            'create' => Pages\CreateFacultad::route('/create'),
            'edit' => Pages\EditFacultad::route('/{record}/edit'),
        ];
    }
}