@extends('Layouts.scaffold')
   @section('content')
   <div class="sub_page">
      <div class="hero_area">
        
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach (App\Models\Product::all()  as $product)
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <div class="box">
                       <div class="option_container">
                           <div class="options">
                              <a href="{{route('product.detail', $product->id)}}" class="option1">Product Detail</a>
                               {{-- <a href="" class="option2">Add to cart</a> --}}
                           </div>
                       </div>
                       <div class="img-box">
                           <img src="{{ asset('images/' . $product->Image) }}" alt="">
                       </div>
                       <div class="detail-box">
                           <h5>{{ $product->Title }}</h5>
                           <h6>PKR  {{ $product->Price }}</h6>
                       </div>
                   </div>
               </div>
           @endforeach
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
     
   </div>
   @endsection
