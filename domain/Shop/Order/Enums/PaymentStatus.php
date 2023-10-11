<?php

declare(strict_types=1);

namespace Domain\Shop\Order\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum PaymentStatus: string implements HasColor, HasLabel
{
    case DEPOSIT = 'deposit';
    case RECEIVE = 'receive';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::RECEIVE => 'success',
            self::DEPOSIT => 'warning',
        };
    }

    public function getLabel(): ?string
    {
        return Str::headline($this->value);
    }
}
