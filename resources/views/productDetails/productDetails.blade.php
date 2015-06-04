@extends('app')
@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="left-sidebar">
         @include('partial.sidebar',['categorys'=>$categorys,'brands'=>$brands])

         <div class="price-range"><!--price-range-->
          <h2>Price Range</h2>
          <div class="well">
           <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
           <b>$ 0</b> <b class="pull-right">$ 600</b>
         </div>
       </div><!--/price-range-->

       <div class="shipping text-center"><!--shipping-->
        <img src="/images/home/shipping.jpg" alt="" />
      </div><!--/shipping-->

    </div>
  </div>

  <div class="col-sm-9 padding-right">
    <div class="product-details">  <!--product-details-->
      <div class="col-sm-5">
        <div class="view-product">
          <img src=" /{{$product->picture}}" alt="" />
          <h3>ZOOM</h3>
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
              <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
              <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
            </div>
            <div class="item">
              <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
              <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
              <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
            </div>
            <div class="item">
              <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
              <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
              <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
            </div>

          </div>

          <!-- Controls -->
          <a class="left item-control" href="#similar-product" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right item-control" href="#similar-product" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>

      </div>
      <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
          <img src="" class="newarrival" alt="" />
          <h2>{{$product->name}}</h2>
          <p>Web ID: 1089772</p>
          <img src="/images/product-details/rating.png" alt="" />
          <span>
            <span>{{$product->price}}</span>
            <label>Quantity:</label>
            <input type="text" value="3" />
            <button type="button" class="btn btn-fefault cart">
              <i class="fa fa-shopping-cart"></i>
              Add to cart
            </button>
          </span>
          <p><b>Availability:</b> In Stock</p>
          <p><b>Condition:</b> {{$product->condition}}</p>
          <p><b>Brand:</b>{{$product->brand}}</p>
          <a href=""><img src="" class="share img-responsive"  alt="" /></a>
        </div><!--/product-information-->
      </div>
    </div><!--/product-details-->

    <div class="category-tab shop-details-tab"><!--category-tab-->
      <div class="col-sm-12">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#product-feature" data-toggle="tab">Product Feature</a></li>
          <li><a href="#companyprofile" data-toggle="tab">Condition</a></li>
          <li><a href="#tag" data-toggle="tab">Purchase Step</a></li>
          <li><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
        </ul>
      </div>
      <div class="tab-content">
        <div class="tab-pane fade active in" id="product-feature" >
         <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="/images/home/gallery1.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="/images/home/gallery2.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="/images/home/gallery3.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery4.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="tab-pane fade" id="companyprofile" >
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery1.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery3.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery2.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery4.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="tag" >
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery1.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery2.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery3.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery4.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade " id="reviews" >
        @foreach($reviews as $review)
        <div class="col-sm-12">
          <ul>
            <li><a href=""><i class="fa fa-user"></i>{{$review->name}}</a></li>
            <li><a href=""><i class="fa fa-clock-o"></i>{{$review->created_at}} PM</a></li>
          </ul>
          <p>{{$review->message}}</p>
          @endforeach
          <p><b>Write Your Review</b></p>
          

          <form class="form-horizontal" role="form" method="POST" action="{{ URL::route('review') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <span>
              <input type="text"  name="name" id="name" value="" placeholder="Your Name"/>
              <input type="email" name="email" id="email" value="" placeholder="Email Address"/>
              <input type="hidden" name="id" id="id" value="{{$product->id}}">
            </span>
            <textarea name="message" id="message" placeholder="Please Enter Your Message" ></textarea>
            <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
            <button type="submit" class="btn btn-default pull-right">
              Submit
            </button>
          </form>
        </div>
      </div>

    </div>
  </div><!--/category-tab-->

  <div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">recommended items</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active"> 
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend1.jpg" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend2.jpg" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend3.jpg" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">  
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend1.jpg" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend2.jpg" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend3.jpg" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>      
    </div>
  </div><!--/recommended_items-->

</div>
</div>
</div>
</section>
@stop()