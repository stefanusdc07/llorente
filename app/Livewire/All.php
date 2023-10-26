<?php

namespace App\Livewire;

use Domain\Shop\Category\Models\Category;
use Livewire\Component;

class All extends Component
{
    public $product;
    public $category;

    public function render()
    {
        $this->category = Category::where('is_visible', 1)->get();
        return view('livewire.all');
    }
}
