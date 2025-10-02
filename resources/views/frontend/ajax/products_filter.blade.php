<?php
	$BackgroundColor   =  $restaurant->background_color;  //body background color
	$TextColor = $restaurant->main_color;  //all colors
	$HoverColor = $restaurant->hover_color;  //hover colors
	$BannerImage = $restaurant->background_image;  //Banner image
	$sliderImg= $restaurant->slider_image;
	?>

<style>
		body{
			 background-color: <?php echo $BackgroundColor; ?> !important; 
			}

			.backgroundColor{
				background-color: <?php echo $BackgroundColor; ?> !important; 
			}

			.textColor{
				color: <?php echo $TextColor; ?> !important; 
			}

			.ThirdBgColor{
				background-color: <?php echo $HoverColor; ?> !important; 
			}

			.ThirdColor{
				color: <?php echo $HoverColor; ?> !important; 
			}

			i{
				color: <?php echo $HoverColor; ?> !important; 
			}
			.title {
				color: <?php echo $TextColor; ?> !important; 
			}

			.banner-content h5{
				color: <?php echo $TextColor; ?> !important; 
			}

			.dz-content p {
				color: <?php echo $BackgroundColor; ?>ac !important ; 
			}

			.dz-title  {
				color: <?php echo $BackgroundColor; ?> !important ; 
			}

			.dz-card.style-1{
				background-color: <?php echo $TextColor; ?> !important; 
			}

		

			.dz-meta li{
				color: <?php echo $BackgroundColor; ?>ac !important ; 
			}

			.dz-info p{
				color: <?php echo $BackgroundColor; ?>ac !important ; 
			}

			.read-btn button{ 
				background-color: <?php echo $HoverColor; ?> !important; 
				border-color: <?php echo $HoverColor; ?> !important;
				color: <?php echo $TextColor; ?> !important ; 
				 
			}

			.btn-hover-1{
				background-color: <?php echo $HoverColor; ?> !important; 
				border-color: <?php echo $HoverColor; ?> !important;
				color: <?php echo $TextColor; ?> !important ; 
			}

			.btn-hover-1:hover span {
			
				color: <?php echo $BackgroundColor; ?> !important ; 
			}

			.btn-hover-1::before {
				background-color: <?php echo $TextColor; ?> !important; 
				color: <?php echo $BackgroundColor; ?> !important ; 
			}

			.btn-hover-1::after {
				background-color: <?php echo $TextColor; ?> !important; 
				color: <?php echo $BackgroundColor; ?> !important ; 
			}
			
			.dz-content{
				background-color: <?php echo $TextColor; ?> !important; 
			}

			.counter-box input{
				background-color: <?php echo $TextColor; ?> !important; 
				border-color: <?php echo $BackgroundColor; ?>22 !important; 
			}

			
			select{
				background-color: <?php echo $TextColor; ?> !important; 
				border : 1px solid <?php echo $BackgroundColor; ?>24 !important; 
				color: <?php echo $BackgroundColor; ?> !important; 

			}

			.btn-cart{
				background-color: <?php echo $TextColor; ?> !important; 
			}

			.btn-prev-long::before, .btn-next-long::before{
				background-color: <?php echo $TextColor; ?> !important; 
				boder:0px;
			}
			
	</style>

@if(count($products))
                        @foreach ($products as $product)
                            @if($product->product_choise == 1)
                                @if(count($product->productChoise))
                                    <div class="col-xl-6 col-lg-8 mb-3">
    
                                        <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" >
                                            <div class="dz-media">
                                                <a href="blog-standard.html"><img src="{{ asset('products/'. $product->image) }}" alt="/"></a>
                                            </div>
                                            <div class="dz-info justify-content-between">
                                                <div class="dz-meta">
                                                    <ul>
                                                        <li><a><i class="flaticon-fast-food"></i> {{ $product->category->en_name }}</a></li>
                                                    </ul>
                                                </div> 
                                                <h5 class="dz-title"><a>{{ $product->en_name }}</a></h5>
												
    
                                                <form class="dz-hover-content  justify-content-between align-items-end" action="{{ route('add-to-cart-new', $product->id) }}" method="POST">
                                                    @csrf
													<select name="product_choice" style="border: 1px solid #00000014;  margin-bottom: 10px;"> 
														@foreach($product->productChoise as $productChoice)
														@if($product->hotdealOption)
                                                        @if($product->hotdealOption->status == 1)

														<option value="{{ $productChoice->id }}"> <span>{{ $productChoice->en_name }}</span>  <span>{{ $productChoice->price - ($productChoice->price*$product->hotdealOption->percentage/100) }} {{ $restaurant->currency_type }}</span> </option>
														@else 
															<option value="{{ $productChoice->id }}"> <span>{{ $productChoice->en_name }}</span>  <span>{{ $productChoice->price }} {{ $restaurant->currency_type }}</span> </option>

                                                        @endif
                                                        @else 
															<option value="{{ $productChoice->id }}"> <span>{{ $productChoice->en_name }}</span>  <span>{{ $productChoice->price }} {{ $restaurant->currency_type }}</span> </option>
	
														@endif
														@endforeach
													</select>

													<div  class="dz-hover-content mb-2 d-flex justify-content-between align-items-end">

														<div class="position-relative counter-box">
															<button type="button" class="decrement-btn decrease"><i style="margin-right:10px !important; cursor:pointer" class="fa fa-minus TextColor"></i></button>
															<input type="number" class="text-center" name="quantity" value="1" min="1">
															<button type="button" class="increment-btn increase"><i style="margin-left:10px !important; cursor:pointer" class="fa fa-plus TextColor"></i></button>
														</div>
														<div class="read-btn">
															<button type="submit" class="btn btn-primary ">Add To Cart </button>		
														
														</div>
													</div>
                                                </form>
    
                                                
                                                
                                            </div>
                                        </div>
    
                                    </div>
                                @endif
                            @endif    
                            @if($product->product_choise == 0)
                                <div class="col-xl-6 col-lg-8 mb-3">
    
                                    <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" >
                                        <div class="dz-media">
                                            <a href="blog-standard.html"><img src="{{ asset('products/'. $product->image) }}" alt="/"></a>
                                        </div>
                                        <div class="dz-info justify-content-between">
                                            <div class="dz-meta">
                                                <ul>
                                                    <li><a><i class="flaticon-fast-food"></i> {{ $product->category->en_name }}</a></li>
                                                </ul>
                                            </div> 
                                            <h5 class="dz-title"><a>{{ $product->en_name }}</a></h5>
                                            @if($product->hotdealOption)
                                            @if($product->hotdealOption->status == 1)
                                            <p>{{ $product->price - ($product->price*$product->hotdealOption->percentage/100) }}  {{ $restaurant->currency_type }}</p>
                                            @else 
                                            <p>{{ $product->price }}  {{ $restaurant->currency_type }}</p>

                                            @endif
                                            @else
                                            <p>{{ $product->price }}  {{ $restaurant->currency_type }}</p>
                                            @endif
    
                                            <form class="dz-hover-content mb-2 d-flex justify-content-between align-items-end" action="{{ route('add-to-cart-new', $product->id) }}" method="POST">
                                                <div class="position-relative counter-box">
                                                    <button type="button" class="decrement-btn decrease"><i style="margin-right:10px !important; cursor:pointer" class="fa fa-minus TextColor"></i></button>
                                                    <input type="number" class="text-center" name="quantity" value="1" min="1">
                                                    <button type="button" class="increment-btn increase"><i style="margin-left:10px !important; cursor:pointer" class="fa fa-plus TextColor"></i></button>
                                                </div>
                                                <div class="read-btn">
                                                    <button type="submit" class="btn btn-primary ">Add To Cart </button>		
                                                
                                                </div>
    
                                            </form>
    
                                            
                                            
                                        </div>
                                    </div>
    
                                </div>
                            @endif
                            
                        @endforeach
                        @else
                              <h2>No Items</h2>  
                        @endif

						<!-- navigation -->
                        <nav aria-label="Page navigation example" class="mt-5">
                            {{ $products->links() }}  
                        </nav>

                     
    