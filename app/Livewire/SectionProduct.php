<?php

namespace App\Livewire;

use Domain\Shop\Category\Models\Category;
use Domain\Shop\Product\Models\Product;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SectionProduct extends Component
{
    #[Reactive]
    public Category $dataCategory;

    public function render()
    {
        $data['product'] = Product::whereCategoryId($this->dataCategory->id)->get();
        return view('livewire.section-product', $data);
    }
}
