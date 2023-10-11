<?php

declare(strict_types=1);
namespace Domain\Shop\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Domain\Shop\Product\Enums\Status;
use Sushi\Sushi;

class Inventory extends Model
{
    use Sushi;

    protected $keyType = 'string';

    public function getRows()
    {
        return [
            ['id' => 1, 'order' => 1, 'title' => 'Getting Started'],
            ['id' => 2, 'order' => 2, 'title' => 'A Basic Form With Validation'],
        ];
    }
}
