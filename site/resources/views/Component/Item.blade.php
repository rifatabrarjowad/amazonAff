 <!-- about section -->
 <section class="about_section">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6 px-0">
                 <div class="img-box">
                     <img class="img-fluid" src="{{asset('uploads/product/'.$productID->image)}}" alt="" />
                 </div>
             </div>

             <div class="col-md-5 ml-auto">
                 <div class="detail-box pr-md-3">
                     <div class="heading_container">
                         <h2>{{$productID->title}}</h2>
                     </div>
                     <p>
                         {{$productID->description}}
                     </p>
                     <a target="_blank" href="{{$productID->link}}"> Buy Now </a>
                 </div>
             </div>

         </div>
     </div>
 </section>
 <!-- end about section -->



 <!-- product section -->

 <section class="product_section layout_padding">
     <div class="container">
         <div class="heading_container heading_center">
             <h2>Our Products</h2>
         </div>
         <div class="row">
             @foreach($productData as $product)
             <div class="col-sm-6 col-lg-4">
                 <div class="box">
                     <div class="img-box">
                         <img src="{{asset('uploads/product/'.$product->image)}}" alt="Product Img" />
                         <a href="{{ url('product/'.$product->id)}}" target="_blank" class="add_cart_btn">
                             <span>Get The Product</span>
                         </a>
                     </div>
                     <div class="detail-box text-center">
                         <h5>{{$product->title}}</h5>
                         <div class="product_info ">
                             <h5 class="text-center m-auto"><span>$</span> {{$product->price}}</h5>
                         </div>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </section>

 <!-- end product section -->