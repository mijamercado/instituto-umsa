<?php

namespace App\Filament\Resources\TipoInvestigacionResource\Pages;

use App\Filament\Resources\TipoInvestigacionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTipoInvestigacion extends EditRecord
{
    protected static string $resource = TipoInvestigacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
