@extends('layouts.main')
@section('content')
    <!-- <?php print_r(session('cart'));?> -->
    <div class="container PY-3">
        <h1>cart</h1>
        <div class="row">
            <div class="col-md-8">
                @if(session('cart'))
                    @foreach(session('cart') as $key=>$val)
                    <div class="border rounded my-2 p-4">
                        @livewire('cart.item', ['productId'=>$key]) 
                    </div>
                    @endforeach
                @else
                    <div class="text-danger">No products in cart</div>
                @endif
                </div>
            <div class="col-md-4">
                <a href="" class="btn btn-success">Checkout</a>
            </div>
        </div>
    </div>
@endsection