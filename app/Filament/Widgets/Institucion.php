<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Instituto;
use App\Models\Investigacion;
use App\Models\Laboratorio;
use App\Models\Servicio;

class Institucion extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Institutos', $this->obtenerInstitutos()),
            Stat::make('Investigaciones', $this->obtenerInvestigaciones()),
            Stat::make('Laboratorios', $this->obtenerLaboratorios()),
            Stat::make('Servicios', $this->obtenerServicios()),
        ];
    }

    protected function obtenerInstitutos()
    {
        $totalInstitutos = Instituto::count();
        return $totalInstitutos;
    }

    protected function obtenerInvestigaciones()
    {
        $totalInvestigaciones = Investigacion::count();
        return $totalInvestigaciones;
    }

    protected function obtenerLaboratorios()
    {
        $totalLaboratorios = Laboratorio::count();
        return $totalLaboratorios;
    }

    protected function obtenerServicios()
    {
        $totalServicios = Servicio::count();
        return $totalServicios;
    }
}
