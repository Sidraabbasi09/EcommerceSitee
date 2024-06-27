@extends('Layouts.scaffold')

@section('content')
<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="">
                <h2 class="text-center Sctxt">Shopping Cart</h2>
            </div>
            <div class="mt-2">
                {{$cartItems->count()}} Items
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <!-- Set columns width -->
                            <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Quantity</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">Price</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                        <tr>
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="{{ asset('images/' . $item->product->Image) }}" class="d-block ui-w-40 ui-bordered mr-4" alt="{{ $item->Title }}">
                                    <div class="media-body">
                                        <a href="#" class="d-block text-dark">{{$item->product->Title}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle p-4">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="quantity-form">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="quantity" class="quantity" value="{{$item->quantity}}" min="1" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">Rs:{{$item->product->Price}}</td>
                            <td class="text-right font-weight-semibold align-middle p-4">Rs:{{number_format($item->quantity * $item->product->Price)}}</td>
                            <form action="{{route('cart.remove' , $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td class="text-center align-middle px-0">
                                    <button class="shop-tooltip close float-none text-danger" type="submit" data-original-title="Remove">×</button>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                <div class="mt-4"></div>
                <div class="d-flex">
                    <div class="text-right mt-4">
                        <label class="text-muted font-weight-normal m-0">Total price</label>
                        <div class="text-large"><strong>Rs: {{number_format($cartItems->sum(function ($item){
                            return $item->quantity * $item->product->Price;
                        }))}}</strong></div>
                    </div>
                </div>
            </div>
            <div class="float-right">
                <a href="{{route('indexpage')}}" type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</a>
                <a href="{{route('checkout.show')}}" type="button" class="btn btn-md btn-primary mt-2">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</div>

@endsection
