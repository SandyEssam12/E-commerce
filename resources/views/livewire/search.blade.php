<div class='shadow'>
    <div class='container py-2'>
        <div class="row">
            <div class="col-md-6">
                <input wire:model="search" type="text" 
                class="form-control form-control-sm"placeholder="Search Products">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 <!-- {{sizeof($products)}} -->
                @foreach($products as $product)
                <div class="mb-3 border-bottom">
                    @if(sizeof($product->images)>0)
                            <img src="{{asset('storage/app/'.$product->images[0]->image)}}" 
                            class="rounded "style="width:50px;" >
                        @else
                            <div class="bg-secondary text-white text-center" style="width:50px;" >
                                <h5>No Image</h5>
                            </div>
                        @endif
                        <a href="{{route('product.show',$product->id)}}">{{$product->name}}</a>
                </div>
                   
             
                @endforeach
            </div>
        </div>
    </div>
</div>