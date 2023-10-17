<?php

namespace App\Livewire;

use Filament\Widgets\Widget;
use Illuminate\Contracts\Support\Htmlable;

class InventoryWidget extends Widget
{
    protected static string $view = 'livewire.inventory-widget';

    protected static ?int $sort = 9;
    protected int|string|array $columnSpan = 'full';
}
