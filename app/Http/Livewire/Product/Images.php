<?php

namespace App\Http\Livewire\Product;


use Livewire\Component;
use Livewire\WithFileUploads;


class Images extends Component
{
    use WithFileUploads;
    public $product ;
    public $image;
    public function save()
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
 
        $imagePath=$this->image->store('images','public');
        $image =$this-> $product->images()->
        create([
            'image' => $imagePath,
        ]); 
        $this-> $product=\APP\Models\Product::where('product_id',$this->product->id)->first();
    }

    public function render()
    {
        
        return view('livewire.product.images');
    }
    
}
