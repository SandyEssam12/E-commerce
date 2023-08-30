<div class="row">
    <div class="col-9"> {{ $product->name }}</div>
    <div class="col-3">  
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="button" wire:click="minus">-</button>
            <input type="text" class="form-control text-center" size="3" value="{{$quantity}}">
            <button class="btn btn-outline-secondary" type="button" wire:click="plus">+</button>
        </div>
    </div>
</div>