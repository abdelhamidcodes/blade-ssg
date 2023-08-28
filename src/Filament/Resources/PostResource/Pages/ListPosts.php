<?php

namespace Hasnayeen\BladeSsg\Filament\Resources\PostResource\Pages;

use Hasnayeen\BladeSsg\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
