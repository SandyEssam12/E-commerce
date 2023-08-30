<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $search; 
    public function render()
    {
        $products=[];
        if($this->search!='')
        {
            $products=Product::where('name','like','%'.$this->search.'%')->get();
        }
        return view('livewire.search', compact('products'));
    }
}
