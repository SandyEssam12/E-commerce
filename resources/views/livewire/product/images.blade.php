<div>
    <h5>Images</h5>
    @forelse($product->images as $image)
   <img src="{{asset('storage/app/images/. $image->image')}}"class="w-25 float-start"> 
    @empty
    <div class="text_danger">No Images</div>
    @endforelse

    <form wire:submit.prevent="save">
        <input type="file" wire:model="image">
    
        @error('image') 
            <span class="error">{{ $message }}</span> 
        @enderror
    
        <button type="submit">Save Image</button>
    </form>
</div>

