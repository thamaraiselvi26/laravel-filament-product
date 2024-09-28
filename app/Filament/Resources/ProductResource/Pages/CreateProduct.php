<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Traits\Redirect;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    use Redirect;

    protected static string $resource = ProductResource::class;
}
