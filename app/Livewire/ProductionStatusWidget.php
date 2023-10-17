<?php

namespace App\Livewire;

use Filament\Widgets\Widget;

class ProductionStatusWidget extends Widget
{
    protected static string $view = 'livewire.production-status-widget';
    protected static ?int $sort = 10;
    protected int|string|array $columnSpan = 'full';
}
