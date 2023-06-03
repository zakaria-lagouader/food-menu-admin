<?php

namespace App\Filament\Resources\NumberResource\Pages;

use App\Filament\Resources\NumberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNumbers extends ListRecords
{
    protected static string $resource = NumberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
