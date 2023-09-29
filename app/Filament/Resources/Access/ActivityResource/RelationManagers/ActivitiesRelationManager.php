<?php

declare(strict_types=1);

namespace App\Filament\Resources\Access\ActivityResource\RelationManagers;

use App\Filament\Resources\Access\ActivityResource;
use Exception;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ActivitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'activities';

    protected static ?string $recordTitleAttribute = 'description';

    public function form(Form $form): Form
    {
        return ActivityResource::form($form);
    }

    /** @throws Exception */
    public function table(Table $table): Table
    {
        return ActivityResource::table($table);
    }

    protected function canCreate(): bool
    {
        return false;
    }

    protected function canEdit(Model $record): bool
    {
        return false;
    }

    protected function canDelete(Model $record): bool
    {
        return false;
    }
}
