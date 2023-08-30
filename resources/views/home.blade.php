@extends('layouts.main')

@section('content')
    <a href="{{route('product.list')}}" class="float-right btn btn-sm btn-outline-success">View All</a>
    <h5>Latest products</h5>
    <div class="row">
        @foreach($latest as $product)
               @livewire('product.block',['product'=>$product])          
         @endforeach
    </div>
@endsection



