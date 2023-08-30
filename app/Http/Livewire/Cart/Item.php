<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class Item extends Component
{
    public $productId;
    public $quantity;

    public function mount()
    {
        $cart=session('cart');
        $this->quantity=$cart[$this->productId];
    }
    public function plus(Request $request)
    {
        $cart=session('cart');
        $cart[$this->productId]=$cart[$this->productId]+1;
        $request->session()->put('cart',$cart);
        $this->emit ('CartUpdate');
        $this->quantity=$cart[$this->productId];

    }

    public function minus(Request $request)
    {
        $cart=session('cart');
        $cart[$this->productId]=$cart[$this->productId]-1;
        $this->quantity=$cart[$this->productId];
        if($cart[$this->productId]==0){
            unset($cart[$this->productId]);    
        }
        $request->session()->put('cart',$cart);
        $this->emit ('CartUpdate');
    }

    public function render()
    {
        $product=Product::where('id','=',$this->productId)->first();
        return view('livewire.cart.item',compact('product'));
    }
}
