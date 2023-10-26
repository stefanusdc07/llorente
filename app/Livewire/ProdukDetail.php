<?php

namespace App\Livewire;

use Domain\Shop\Product\Models\Product;
use Domain\Shop\Product\Models\Sku;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProdukDetail extends Component
{

    public Product $produk;
    public Sku $sku;
    public $allProduk;

    public function mount($product)
    {
        $this->produk = Product::findOrFail($product);
        $this->sku = Sku::whereProductId($this->produk->id)->first();
        $this->allProduk = Product::take(5)->orderBy(DB::raw('RAND()'))->get();
    }

    public function render()
    {
        return view('livewire.produk-detail');
    }
}
