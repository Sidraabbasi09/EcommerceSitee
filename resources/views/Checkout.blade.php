<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <a class="navbar-brand d-flex justify-content-center" style="margin-left: 80%;" href="index.html"><img width="300" src="{{asset('/assets/images/logo.png')}}" alt="#" /></a>
                <form>
                    <div class="form-group mt-5">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="subscribe" checked>
                            <label class="form-check-label" for="subscribe">Email me with news and offers</label>
                        </div>
                    </div>
                    <h5 class="mt-4">Shipping address</h5>
                    <div class="form-group">
                        <label for="country">Country/region</label>
                        <select class="form-control" id="country">
                            <option>Pakistan</option>
                            <!-- Add more countries as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+92</span>
                            </div>
                            <input type="tel" class="form-control" id="phone" placeholder="Please insert your number starting with +923">
                        </div>
                    </div>
                    <form id="checkout-form">
                        <!-- Existing form fields -->
                    
                        <h5 class="mt-4">Payment Information</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod" checked>
                            <label class="form-check-label" for="cod">
                                Cash on Delivery
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="card" value="card">
                            <label class="form-check-label" for="card">
                                Credit/Debit Card
                            </label>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block">Continue to shipping</button>
                    </form>
                    
                </form>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-5">Order Summary</h5>
                        <hr>
                        @php
                            $subtotal = 0;
                        @endphp
                        @foreach ($cartItems as $item)
                            @php
                                $subtotal += $item->quantity * $item->product->Price;
                                
                            @endphp
                            <p class="d-flex justify-content-between">
                                <span class="d-flex">
                                    <span><img src="{{ asset('images/' . $item->product->Image) }}" class="d-block ui-w-40 ui-bordered mr-4" width="75px;" alt="{{ $item->Title }}"></span>
                                    <span>{{ $item->product->Title }} ({{ $item->quantity }}* {{ $item->product->Price }})</span>
                                </span>
                        {{-- <span><img src="{{ asset('images/' . $item->product->Image) }}" class="d-block ui-w-40 ui-bordered mr-4" width="50px;" alt="{{ $item->Title }}">{{ $item->product->Title }} ({{ $item->quantity }}* {{ $item->product->Price }})</span> --}}
                                <span >Rs:{{ number_format($item->quantity * $item->product->Price, 2) }}</span>
                            </p>
                        @endforeach
                        <hr>
                        <p class="d-flex justify-content-between">
                            <span>Subtotal</span>
                            <span>Rs:{{ number_format($subtotal, 2) }}</span>
                        </p>
                        {{-- <p class="d-flex justify-content-between">
                            <span>Shipping</span>
                            <span>Calculated at next step</span>
                        </p> --}}
                        <hr>
                        <p class="d-flex justify-content-between font-weight-bold">
                            <span>Total</span>
                            <span>Rs:{{ number_format($subtotal, 2) }}</span>
                        </p>
                        {{-- <a href="{{ route('checkout.proceed') }}" class="btn btn-primary btn-block">Proceed to Shipping</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
