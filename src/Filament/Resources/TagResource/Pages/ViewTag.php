<?php

namespace Hasnayeen\BladeSsg\Filament\Resources\TagResource\Pages;

use Hasnayeen\BladeSsg\Filament\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTag extends ViewRecord
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
