@extends('layouts.main')
@section ('content')
<div class="container py-5">
   <div class="row">
        <div class="col-md-4">
            <div class="mb-3 border rounded">
                @if(sizeof($product->images)>0)
                        <img src="{{asset('storage/app/'.$product->images[0]->image)}}" 
                        class="rounded "style="width:50px;" >
                    @else
                        <div class="bg-secondary text-white text-center" style="width:50px;" >
                            <h5>No Image</h5>
                        </div>
                    @endif        
            </div>
        </div>
        <div class="col-md-8">
            <h1>{{$product->name}}</h1>
            <p><b>Price</b> :<i class="fas fa-dollar-sign"> </i>{{$product->price}}</p>
           
            @livewire('product.option',['product'=>$product])
        </div>
    </div>
   
</div>
@endsection ('content')
