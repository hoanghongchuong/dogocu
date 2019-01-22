@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<main id="main" class="" style="margin-top: 20px;">
         <div id="content" role="main" class="content-area">
            <div class="row" id="row-1243469207">
               <div class="col small-12 large-12">
                  <div class="col-inner">
                     <div class="owl-carousel owl-theme">
                           @foreach($sliders as $slider)
                           <div class="item"><img src="{{asset('upload/hinhanh/'.$slider->photo)}}"></div>
                           @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" id="row-1249189387">
               @foreach($cate_services as $key=>$cate_s)
               <div class="col medium-4 small-12 large-4">
                  <div class="col-inner">
                     <div class="banner has-hover bg-zoom-fade" id="banner-{{$key}}">
                        <div class="banner-inner fill">
                           <div class="banner-bg fill">
                              <div class="bg fill bg-fill "></div>
                              <div class="overlay"></div>
                           </div>
                           <!-- bg-layers -->
                           <div class="banner-layers container">
                              <a class="fill" href="{{url('dich-vu/'.$cate_s->alias)}}">
                                 <div class="fill banner-link"></div>
                              </a>
                              <div id="text-box-{{$key}}" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                 <div class="text dark">
                                    <div class="text-inner text-center">
                                       <h3>
                                          <a href="{{url('dich-vu/'.$cate_s->alias)}}" title="">
                                             <span style="font-size: 100%;"><strong><span class="uppercase">{{$cate_s->name}}</span></strong></span>
                                          </a>
                                       </h3>
                                       <div class="is-divider divider clearfix"></div>
                                       <!-- .divider -->
                                    </div>
                                 </div>
                                 <!-- text-box-inner -->
                                 <style scope="scope">
                                    #text-box-{{$key}} {
                                    width: 60%;
                                    }
                                    #text-box-{{$key}} .text {
                                    font-size: 100%;
                                    }
                                 </style>
                              </div>
                              <!-- text-box -->
                           </div>
                           <!-- .banner-layers -->
                        </div>
                        <!-- .banner-inner -->
                        <style scope="scope">
                           #banner-{{$key}} {
                           padding-top: 160px;
                           }
                           #banner-{{$key}} .bg.bg-loaded {
                           background-image: url('{{asset('upload/news/'.$cate_s->photo)}}');
                           }
                           #banner-{{$key}} .overlay {
                           background-color: rgba(0, 0, 0, 0.38);
                           }
                           #banner-{{$key}} .bg {
                           background-position: 55% 52%;
                           }
                        </style>
                     </div>
                     <!-- .banner -->
                  </div>
               </div>
               @endforeach
            </div>
            <div class="container section-title-container">
               <h3 class="section-title section-title-center">
                  <b></b><span class="section-title-main">Sản phẩm cửa hàng</span><b></b>
               </h3>
            </div>
            <!-- .section-title -->
            <div class="row large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
               @foreach($products as $product)
               <div class="col"> <!-- loop từ div nay -->
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1"></div>
                     <div class="product-small box has-hover box-normal box-text-bottom">
                        <div class="box-image">
                           <div class="">
                              <a href="{{url('san-pham/'.$product->alias.'.html')}}">
                              <img width="300" height="300" src="{{asset('upload/product/'.$product->photo)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{$product->name}}" sizes="(max-width: 300px) 100vw, 300px" title="{{$product->name}}"></a>
                           </div>
                           <div class="image-tools top right show-on-hover">

                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center is-large">
                           <div class="title-wrapper">
                              <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 {{$product->category->name}}    
                              </p>
                              <p class="name product-title"><a href="{{url('san-pham/'.$product->alias.'.html')}}">{{$product->name}}</a></p>
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
            <div class="row row-full-width" id="row-1405233805">
               <div class="col small-12 large-12">
                  <div class="col-inner">
                     <div class="banner has-hover" id="banner-56490386">
                        <div class="banner-inner fill">
                           <div class="banner-bg fill">
                              <div class="bg fill bg-fill "></div>
                           </div>
                           <!-- bg-layers -->
                           <div class="banner-layers container">
                              <div class="fill banner-link"></div>
                           </div>
                           <!-- .banner-layers -->
                        </div>
                        <!-- .banner-inner -->
                        <style scope="scope">
                           #banner-56490386 {
                           padding-top: 11%;
                           }
                           #banner-56490386 .bg.bg-loaded {
                           background-image: url(https://muadogocu.vn/wp-content/uploads/2018/09/Untitled-1.jpg);
                           }
                        </style>
                     </div>
                     <!-- .banner -->
                  </div>
               </div>
               <style scope="scope">
               </style>
            </div>
            <div class="container section-title-container">
               <h3 class="section-title section-title-center">
                  <b></b><span class="section-title-main">Dịch Vụ</span><b></b>
               </h3>
            </div>
            <!-- .section-title -->
            <div class="row large-columns-4 medium-columns-1 small-columns-1 slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
               @foreach($services as $item)
               <div class="col post-item"> <!-- loop từ div này -->
                  <div class="col-inner">
                     <a href="{{url('dich-vu/'.$item->alias.'.html')}}" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="600" height="400" src="{{asset('upload/news/'.$item->photo)}}" class="attachment-medium size-medium wp-post-image" alt="{{$item->name}}" sizes="(max-width: 600px) 100vw, 600px" title="{{$item->name}}">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">{{$item->name}}</h5>
                                 <div class="is-divider"></div>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                           <!-- .box-text -->
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               @endforeach
            </div>
            <section class="section" id="section_197839321">
               <div class="bg section-bg fill bg-fill  ">
                  <div class="section-bg-overlay absolute fill"></div>
               </div>
               <!-- .section-bg -->
               <div class="section-content relative">
                  <div class="row" id="row-970910685">
                     <div class="col medium-3 small-12 large-3">
                        <div class="col-inner">
                           <div class="gap-element" style="display:block; height:auto; padding-top:56px"></div>
                           <p style="text-align: center;"><span style="font-size: 180%; color: #ffffff;">HOTLINE</span></p>
                           <p style="text-align: center;"><span style="font-size: 260%; color: #ffffff;">{{$setting->phone}}</span></p>
                        </div>
                     </div>
                     <div class="col medium-9 small-12 large-9">
                        <div class="col-inner des-home">
                           {!! $about->mota !!}
                        </div>
                     </div>
                  </div>
               </div>
               <!-- .section-content -->
               <style scope="scope">
                  #section_197839321 {
                  padding-top: 0px;
                  padding-bottom: 0px;
                  }
                  #section_197839321 .section-bg-overlay {
                  background-color: rgba(0, 0, 0, 0.53);
                  }
                  #section_197839321 .section-bg.bg-loaded {
                  background-image: url('{{asset('public/images/banner.jpg')}}');
                  }
                  #section_197839321 .section-bg {
                  background-position: 50% 59%;
                  }
               </style>
            </section>
            <div class="container section-title-container">
               <h3 class="section-title section-title-center">
                  <b></b><span class="section-title-main">TIN TỨC</span><b></b>
               </h3>
            </div>
            <!-- .section-title -->
            <div class="row large-columns-5 medium-columns-3 small-columns-1 has-shadow row-box-shadow-1 slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
               @foreach($news as $data)
               <div class="col post-item" data-animate="bounceIn">
                  <div class="col-inner">
                     <a href="{{url('tin-tuc/'.$data->alias.'.html')}}" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:70%;">
                                 <img width="533" height="400" src="{{asset('upload/news/'.$data->photo)}}" class="attachment-medium size-medium wp-post-image" alt="{{$data->name}}" sizes="(max-width: 533px) 100vw, 533px" title="{{$data->name}}">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">{{$data->name}}</h5>
                                 <div class="is-divider"></div>
                                 <p class="from_the_blog_excerpt ">{{$data->name}}</p>
                                 <button href="{{url('tin-tuc/'.$data->alias.'.html')}}" class="button  is-outline is-small mb-0">
                                 Xem Thêm...</button>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                                                      
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               @endforeach
             
            </div>
         </div>
      </main>
@endsection
