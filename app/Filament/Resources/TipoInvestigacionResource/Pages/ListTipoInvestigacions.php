<?php

namespace App\Filament\Resources\TipoInvestigacionResource\Pages;

use App\Filament\Resources\TipoInvestigacionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipoInvestigacions extends ListRecords
{
    protected static string $resource = TipoInvestigacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
