<?php

namespace App\Livewire;
use Domain\Shop\Order\Models;
use Domain\Shop\Customer\Model;

use Livewire\Component;

class OrderForm extends Component


{
    public $first_name;
    public $company;
    public $total_price;
    public $notes;


    public function render()
    {
        return view('livewire.order-form');
    }
    public function updatedPrice()
    {
        $this->total_price = $this->price * 1.2; // Calculate the total price
    }

    public function submitForm()
    {
        // Add your form submission logic here
    }
}
