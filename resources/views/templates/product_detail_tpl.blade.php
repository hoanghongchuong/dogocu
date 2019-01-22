@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<main id="main" class="" style="margin-top: 30px;">
    <div class="shop-container">
        <div class="container" style="margin-bottom: 40px;">
            <div class="left-detail">
                <div class="album-image slider_product">
                    <div class="slider-for">
                        @if(count($album_hinh) > 0)
                        @foreach($album_hinh as $album)
                            <div class="item">
                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                            </div>
                        @endforeach
                        @else
                            <div class="item">
                                <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                            </div>
                        @endif
                    </div>

                    <div class="slider-nav">
                        @if(count($album_hinh) > 0)
                            @foreach($album_hinh as $album)
                            <div class="item">
                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                            </div>
                        @endforeach
                        @else
                            <div class="item">
                                <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="right-detail">
                <div class="brcum"><a href="{{url('')}}" title="">Trang chủ /</a> <a href="{{url('san-pham/'.$cateProduct->alias)}}" title="">{{$cateProduct->name}}</a></div>
                <h1 class="name_detail">{{$product_detail->name}}</h1>
                
                <div class="short-des">
                    {!! $product_detail->mota !!}
                </div>
            </div>
        </div>
        <!-- /.container -->
        <div id="product-271" class="post-271 ">
            <div class="product-container">              
                <div class="product-footer">
                    <div class="container">
                        <div class="woocommerce-tabs container tabbed-content">
                           <ul class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-line nav-left">
                              <li class="description_tab active">
                                 <a href="#tab-description">Mô tả</a>
                              </li>
                              <li class="reviews_tab">
                                 <a href="#tab-reviews">Bình luận</a>
                              </li>
                           </ul>
                            <div class="tab-panels">
                                <div class="panel entry-content active" id="tab-description">
                                    <div class="kk-star-ratings">
                                        {!! $product_detail->content !!}
                                    </div>
                                </div>
                            <div class="panel entry-content " id="tab-reviews">
                                <div class="row" id="reviews">
                                    <div class="col large-12" id="comments">
                                       <div class="fb-comments" data-href="{{url('san-pham/'.$product_detail->alias.'.html')}}" data-width="100%" data-numposts="5"></div>
                                    </div>
                                    
                                </div>
                            </div>
                           </div>
                           <!-- .tab-panels -->
                        </div>
                        <!-- .tabbed-content -->
                        <div class="related related-products-wrapper product-section">
                           <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                              Sản phẩm tương tự    
                           </h3>
                           <div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                            @foreach($productSameCate as $item)
                            <div class="product-small col has-hover post-273 product type-product status-publish has-post-thumbnail product_cat-noi-that-phong-ngu product_tag-noi-that-phong-ngu instock shipping-taxable product-type-simple">
                                <div class="col-inner">
                                    <div class="badge-container absolute left top z-1"></div>
                                    <div class="product-small box ">
                                        <div class="box-image">
                                          <div class="image-fade_in_back">
                                            <a href="{{url('san-pham/'.$item->alias.'.html')}}">
                                             <img width="300" height="300" src="{{asset('upload/product/'.$item->photo)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="{{$item->category->name}}" sizes="(max-width: 300px) 100vw, 300px" title="{{$item->category->name}}"></a>
                                          </div>                                      
                                        </div>                                   
                                        <div class="box-text box-text-products">
                                          <div class="title-wrapper">
                                             <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                {{$item->category->name}}     
                                             </p>
                                             <p class="name product-title"><a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a></p>
                                          </div>
                                          <div class="price-wrapper"></div>
                                        </div>
                                       <!-- box-text -->
                                    </div>
                                    <!-- box -->
                                </div>
                                 <!-- .col-inner -->
                            </div>
                            @endforeach
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</main>

@endsection
