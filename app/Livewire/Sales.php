<?php

namespace App\Livewire;

use Filament\Widgets\Widget;

class Sales extends Widget
{
    protected static string $view = 'livewire.sales';
    protected static ?int $sort = 10;
    protected int|string|array $columnSpan = 'full';
}
