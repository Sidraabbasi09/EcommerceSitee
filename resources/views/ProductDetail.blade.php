@extends('Layouts.scaffold')
@section('content')
<div class="container product-detail-container mt-sm-5 mb-sm-5">
     
    <div class="row">
        <div class="col-md-6">
            <div class="img-boxnew">
                <img src="{{ asset('images/' . $product->Image) }}" alt="{{ $product->Title }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="detail-boxnew mt-5">
                <div class="heading_container">
                    <h2>{{ $product->Title }}</h2>
                </div>
                <h4>Price:Pkr {{ $product->Price }}</h4>
                <p>Category:{{ $product->Category }}</p>
                <p>Description:</p>
                <p>{{ $product->Description }}</p>
              <form action="{{route('cart',$product->id)}}" method="Post">
                @csrf
                {{-- <input type="number"  class="quantity"  min="1" name="quantity"> --}}
                <div class="" style="width: 40%;">
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                </div>
              </form>
             
            </div>
        </div>
    </div>
</div>

@endsection