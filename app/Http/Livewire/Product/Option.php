<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Http\Request;

class Option extends Component
{
    public $product;
    public $message;
    public function addToCart(Request $request)
    {
        //using session
        $cart =array(); 
        if($request->session()->exists('cart')){
            $cart=$request->session()->get('cart');
        }
        $cart[$this->product->id]=1;
        $request->session()->put('cart',$cart);
        $this->emit ('CartUpdate');
    }

    public function render()
    {
        return view('livewire.product.option');
    }
}
