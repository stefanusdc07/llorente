<?php

declare(strict_types=1);

namespace Domain\Shop\Order\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum Status: string implements HasColor, HasIcon, HasLabel
{
    case PENDING = 'pending';
    case PREPARING = 'quote-proforma';
    case CUSTOM_QUOTE='custom-quote';
    case IN_QUEUE = 'in-queue';
    case READY = 'ready';
    case DISPATCHED = 'transit';
    case STAGING = 'staging';
    case CSGN= 'CSGN';
    case CSGN_ITEM_SOLD='CSGN Item Sold';
    case EXPECTING_PAYMENT = 'expecting payment';
    case COMPLETED = 'completed';
    case CANCELED = 'canceled';
    case FAILED = 'failed';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::COMPLETED => 'success',
            self::READY, self::PREPARING, self::IN_QUEUE , self::DISPATCHED , self::CUSTOM_QUOTE=> 'warning',
            self::CANCELED, self::FAILED , self::EXPECTING_PAYMENT => 'danger',
            default => 'info',
        };
    }

    public function getLabel(): ?string
    {
        return Str::headline($this->value);
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::COMPLETED, self::STAGING, self::CSGN, => 'heroicon-o-check-circle',
            self::READY, self::PREPARING, self::IN_QUEUE , self::DISPATCHED , self::CUSTOM_QUOTE => 'heroicon-o-clock',
            self::CANCELED, self::FAILED, self::EXPECTING_PAYMENT, self::CSGN_ITEM_SOLD => 'heroicon-o-x-circle',
            default => 'heroicon-o-information-circle',
        };
    }
}
