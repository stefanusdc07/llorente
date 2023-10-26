<?php

namespace App\Filament\Pages;

use Filament\Navigation\NavigationGroup;
use Filament\Pages\Page;

class Sales extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.sales';

    public static function getNavigationGroup(): ?string
    {
        return trans('Shop');
    }
}
