
    <div class="col">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                @if(sizeof($product->images)>0)
                    <img src="{{asset('storage/app/'.$product->images[0]->image)}}" 
                    class="rounded mx-auto d-block" >
                @else
                    <div class="bg-secondary text-white text-center" style="height:250px" >
                        <h5>No Image</h5>
                    </div>
                @endif
                    <h5 class="card-title"> {{$product->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"> {{$product->price}}</h6>
                    <p class="card-text"> {{$product->description}}</p>
                    <a href="#" class="card-link">Add to Cart</a>
                    <a href="{{route('product.show',$product->id)}}" class="card-link">view Details</a>
            </div>        
        </div>
    </div>

