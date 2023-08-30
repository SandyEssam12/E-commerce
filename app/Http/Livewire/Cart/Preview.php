<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class Preview extends Component
{
    public $count;
    protected $listeners=['CartUpdate'=> 'updateCartItems'];
    public function mount()
    {
        $this->count=0;
        if(session('cart')){
            $this->count=sizeof(session('cart'));
        }
    }
    
    public function updateCartItems()
    {
        $this->count=sizeof(session('cart'));
       
    }

    public function render()
    {
        return view('livewire.cart.preview');
    }
}
