@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<main id="main" class="">
         <div id="content" role="main" class="content-area">
            <div class="row" id="row-1243469207">
               <div class="col small-12 large-12">
                  <div class="col-inner">
                     <div class="slider-wrapper relative " id="slider-1411583536">
                        <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
                           "cellAlign": "center",
                           "imagesLoaded": true,
                           "lazyLoad": 1,
                           "freeScroll": false,
                           "wrapAround": true,
                           "autoPlay": 6000,
                           "pauseAutoPlayOnHover" : true,
                           "prevNextButtons": true,
                           "contain" : true,
                           "adaptiveHeight" : true,
                           "dragThreshold" : 5,
                           "percentPosition": true,
                           "pageDots": true,
                           "rightToLeft": false,
                           "draggable": true,
                           "selectedAttraction": 0.1,
                           "parallax" : 0,
                           "friction": 0.6        }'>
                           <div class="banner has-hover" id="banner-1348425749">
                              <div class="banner-inner fill">
                                 <div class="banner-bg fill">
                                    <div class="bg fill bg-fill "></div>
                                    <div class="overlay"></div>
                                 </div>
                                 <!-- bg-layers -->
                                 <div class="banner-layers container">
                                    <div class="fill banner-link"></div>
                                 </div>
                                 <!-- .banner-layers -->
                              </div>
                              <!-- .banner-inner -->
                              <style scope="scope">
                                 #banner-1348425749 {
                                 padding-top: 32%;
                                 }
                                 #banner-1348425749 .bg.bg-loaded {
                                 background-image: url(images/slideshow_3.jpg);
                                 }
                                 #banner-1348425749 .overlay {
                                 background-color: rgba(0, 0, 0, 0.02);
                                 }
                                 #banner-1348425749 .bg {
                                 background-position: 58% 63%;
                                 }
                              </style>
                           </div>
                           <!-- .banner -->
                           <div class="banner has-hover" id="banner-1039139460">
                              <div class="banner-inner fill">
                                 <div class="banner-bg fill">
                                    <div class="bg fill bg-fill "></div>
                                    <div class="overlay"></div>
                                 </div>
                                 <!-- bg-layers -->
                                 <div class="banner-layers container">
                                    <div class="fill banner-link"></div>
                                 </div>
                                 <!-- .banner-layers -->
                              </div>
                              <!-- .banner-inner -->
                              <style scope="scope">
                                 #banner-1039139460 {
                                 padding-top: 32%;
                                 }
                                 #banner-1039139460 .bg.bg-loaded {
                                 background-image: url(images/slideshow_1.jpg);
                                 }
                                 #banner-1039139460 .overlay {
                                 background-color: rgba(0, 0, 0, 0.02);
                                 }
                                 #banner-1039139460 .bg {
                                 background-position: 58% 63%;
                                 }
                              </style>
                           </div>
                           <!-- .banner -->
                        </div>
                        <div class="loading-spin dark large centered"></div>
                        <style scope="scope">
                        </style>
                     </div>
                     <!-- .ux-slider-wrapper -->
                  </div>
               </div>
            </div>
            <div class="row" id="row-1249189387">
               <div class="col medium-4 small-12 large-4">
                  <div class="col-inner">
                     <div class="banner has-hover bg-zoom-fade" id="banner-1044028196">
                        <div class="banner-inner fill">
                           <div class="banner-bg fill">
                              <div class="bg fill bg-fill "></div>
                              <div class="overlay"></div>
                           </div>
                           <!-- bg-layers -->
                           <div class="banner-layers container">
                              <a class="fill" href="blog">
                                 <div class="fill banner-link"></div>
                              </a>
                              <div id="text-box-168958333" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                 <div class="text dark">
                                    <div class="text-inner text-center">
                                       <h3><span style="font-size: 100%;"><strong><span class="uppercase">thu mua ĐỒ GỖ CŨ giá cao nhất HN</span></strong></span></h3>
                                       <div class="is-divider divider clearfix"></div>
                                       <!-- .divider -->
                                    </div>
                                 </div>
                                 <!-- text-box-inner -->
                                 <style scope="scope">
                                    #text-box-168958333 {
                                    width: 60%;
                                    }
                                    #text-box-168958333 .text {
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
                           #banner-1044028196 {
                           padding-top: 160px;
                           }
                           #banner-1044028196 .bg.bg-loaded {
                           background-image: url(images/mua-do-go-tai-quan-thanh-xuan-uy-tin-2.jpg);
                           }
                           #banner-1044028196 .overlay {
                           background-color: rgba(0, 0, 0, 0.38);
                           }
                           #banner-1044028196 .bg {
                           background-position: 55% 52%;
                           }
                        </style>
                     </div>
                     <!-- .banner -->
                  </div>
               </div>
               <div class="col medium-4 small-12 large-4">
                  <div class="col-inner">
                     <div class="banner has-hover bg-zoom-fade" id="banner-1932435642">
                        <div class="banner-inner fill">
                           <div class="banner-bg fill">
                              <div class="bg fill bg-fill "></div>
                              <div class="overlay"></div>
                           </div>
                           <!-- bg-layers -->
                           <div class="banner-layers container">
                              <a class="fill" href="">
                                 <div class="fill banner-link"></div>
                              </a>
                              <div id="text-box-1595253906" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                 <div class="text dark">
                                    <div class="text-inner text-center">
                                       <h3><span style="text-transform: uppercase;"><b>mua nhanh – lịch sự – uy tín</b></span></h3>
                                       <div class="is-divider divider clearfix"></div>
                                       <!-- .divider -->
                                    </div>
                                 </div>
                                 <!-- text-box-inner -->
                                 <style scope="scope">
                                    #text-box-1595253906 {
                                    width: 60%;
                                    }
                                    #text-box-1595253906 .text {
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
                           #banner-1932435642 {
                           padding-top: 160px;
                           }
                           #banner-1932435642 .bg.bg-loaded {
                           background-image: url(images/tien-thang-thu-mua-go-cu-ha-nam-gia-tot-co-102-2.jpg);
                           }
                           #banner-1932435642 .overlay {
                           background-color: rgba(0, 0, 0, 0.4);
                           }
                        </style>
                     </div>
                     <!-- .banner -->
                  </div>
               </div>
               <div class="col medium-4 small-12 large-4">
                  <div class="col-inner">
                     <div class="banner has-hover bg-zoom-fade" id="banner-1404075593">
                        <div class="banner-inner fill">
                           <div class="banner-bg fill">
                              <div class="bg fill bg-fill "></div>
                              <div class="overlay"></div>
                           </div>
                           <!-- bg-layers -->
                           <div class="banner-layers container">
                              <a class="fill" href="about-us">
                                 <div class="fill banner-link"></div>
                              </a>
                              <div id="text-box-170911235" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                 <div class="text dark">
                                    <div class="text-inner text-center">
                                       <h3><strong><span class="uppercase">Bảo hành dài lâu</span></strong></h3>
                                       <div class="is-divider divider clearfix"></div>
                                       <!-- .divider -->
                                    </div>
                                 </div>
                                 <!-- text-box-inner -->
                                 <style scope="scope">
                                    #text-box-170911235 {
                                    width: 60%;
                                    }
                                    #text-box-170911235 .text {
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
                           #banner-1404075593 {
                           padding-top: 160px;
                           }
                           #banner-1404075593 .bg.bg-loaded {
                           background-image: url(images/bo-ban-ghe-an-go-huong_2-1.jpg);
                           }
                           #banner-1404075593 .overlay {
                           background-color: rgba(0, 0, 0, 0.65);
                           }
                           #banner-1404075593 .bg {
                           background-position: 71% 0%;
                           }
                        </style>
                     </div>
                     <!-- .banner -->
                  </div>
               </div>
            </div>
            <div class="container section-title-container">
               <h3 class="section-title section-title-center">
                  <b></b><span class="section-title-main">Sản phẩm cửa hàng</span><b></b>
               </h3>
            </div>
            <!-- .section-title -->
            <div class="row large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
               <div class="col"> <!-- loop từ div nay -->
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1"></div>
                     <div class="product-small box has-hover box-normal box-text-bottom">
                        <div class="box-image">
                           <div class="">
                              <a href="https://muadogocu.vn/bo-ban-ghe-go-huong-6-ghe/">
                              <img width="300" height="300" src="https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-go-huong_2-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Bộ bàn ghế ăn gỗ hương 6 ghế Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-go-huong_2-300x300.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-go-huong_2-280x280.jpg 280w, https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-go-huong_2-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" title="Bộ bàn ghế ăn gỗ hương 6 ghế Classic Shop"></a>
                           </div>
                           <div class="image-tools top right show-on-hover">
                              <div class="wishlist-icon">
                                 <button class="wishlist-button button is-outline circle icon">
                                 <i class="icon-heart"></i>       </button>
                                 <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-296">
                                       <div class="yith-wcwl-add-button show" style="display:block">
                                          <a href="/?add_to_wishlist=296" rel="nofollow" data-product-id="296" data-product-type="simple" class="add_to_wishlist">
                                          Add to Wishlist</a>
                                          <img src="https://muadogocu.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading Classic Shop" width="16" height="16" style="visibility:hidden" title="Classic Shop">
                                       </div>
                                       <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="https://muadogocu.vn/bo-ban-ghe-go-huong-6-ghe/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="https://muadogocu.vn/bo-ban-ghe-go-huong-6-ghe/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div style="clear:both"></div>
                                       <div class="yith-wcwl-wishlistaddresponse"></div>
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center is-large">
                           <div class="title-wrapper">
                              <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 Nội Thất Phòng Bếp      
                              </p>
                              <p class="name product-title"><a href="https://muadogocu.vn/bo-ban-ghe-go-huong-6-ghe/">Bộ bàn ghế ăn gỗ hương 6 ghế</a></p>
                           </div>
                           <div class="price-wrapper"></div>
                        </div>
                        <!-- box-text -->
                     </div>
                     <!-- box -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- col -->
               <div class="col">
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1"></div>
                     <div class="product-small box has-hover box-normal box-text-bottom">
                        <div class="box-image">
                           <div class="">
                              <a href="https://muadogocu.vn/thanh-ly-ban-ghe-trien-8-mon-hang-sau-tuoi/">
                              <img width="300" height="300" src="https://muadogocu.vn/wp-content/uploads/2018/09/thanh-ly-bo-ban-ghe-trien-8-mon_1-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Thanh lý bộ bàn ghế triện 8 món hàng sâu tuổi Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/thanh-ly-bo-ban-ghe-trien-8-mon_1-300x300.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/thanh-ly-bo-ban-ghe-trien-8-mon_1-280x280.jpg 280w, https://muadogocu.vn/wp-content/uploads/2018/09/thanh-ly-bo-ban-ghe-trien-8-mon_1-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" title="Thanh lý bộ bàn ghế triện 8 món hàng sâu tuổi Classic Shop"></a>
                           </div>
                           <div class="image-tools top right show-on-hover">
                              <div class="wishlist-icon">
                                 <button class="wishlist-button button is-outline circle icon">
                                 <i class="icon-heart"></i>       </button>
                                 <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-237">
                                       <div class="yith-wcwl-add-button show" style="display:block">
                                          <a href="/?add_to_wishlist=237" rel="nofollow" data-product-id="237" data-product-type="simple" class="add_to_wishlist">
                                          Add to Wishlist</a>
                                          <img src="https://muadogocu.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading Classic Shop" width="16" height="16" style="visibility:hidden" title="Classic Shop">
                                       </div>
                                       <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="https://muadogocu.vn/thanh-ly-ban-ghe-trien-8-mon-hang-sau-tuoi/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="https://muadogocu.vn/thanh-ly-ban-ghe-trien-8-mon-hang-sau-tuoi/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div style="clear:both"></div>
                                       <div class="yith-wcwl-wishlistaddresponse"></div>
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center is-large">
                           <div class="title-wrapper">
                              <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 Nội Thất Phòng Khách    
                              </p>
                              <p class="name product-title"><a href="https://muadogocu.vn/thanh-ly-ban-ghe-trien-8-mon-hang-sau-tuoi/">Thanh lý bộ bàn ghế triện 8 món hàng sâu tuổi</a></p>
                           </div>
                           <div class="price-wrapper"></div>
                        </div>
                        <!-- box-text -->
                     </div>
                     <!-- box -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- col -->
               <div class="col">
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1"></div>
                     <div class="product-small box has-hover box-normal box-text-bottom">
                        <div class="box-image">
                           <div class="">
                              <a href="https://muadogocu.vn/tu-quan-ao-3-buong-hong-go-gu/">
                              <img width="300" height="300" src="https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-4-buong-kham-trai-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Tủ quần áo 3 buồng hồng gỗ gụ Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-4-buong-kham-trai-300x300.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-4-buong-kham-trai-280x280.jpg 280w, https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-4-buong-kham-trai-400x400.jpg 400w, https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-4-buong-kham-trai.jpg 600w, https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-4-buong-kham-trai-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" title="Tủ quần áo 3 buồng hồng gỗ gụ Classic Shop"></a>
                           </div>
                           <div class="image-tools top right show-on-hover">
                              <div class="wishlist-icon">
                                 <button class="wishlist-button button is-outline circle icon">
                                 <i class="icon-heart"></i>       </button>
                                 <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-271">
                                       <div class="yith-wcwl-add-button show" style="display:block">
                                          <a href="/?add_to_wishlist=271" rel="nofollow" data-product-id="271" data-product-type="simple" class="add_to_wishlist">
                                          Add to Wishlist</a>
                                          <img src="https://muadogocu.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading Classic Shop" width="16" height="16" style="visibility:hidden" title="Classic Shop">
                                       </div>
                                       <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="https://muadogocu.vn/tu-quan-ao-3-buong-hong-go-gu/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="https://muadogocu.vn/tu-quan-ao-3-buong-hong-go-gu/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div style="clear:both"></div>
                                       <div class="yith-wcwl-wishlistaddresponse"></div>
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center is-large">
                           <div class="title-wrapper">
                              <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 Nội Thất Phòng Ngủ      
                              </p>
                              <p class="name product-title"><a href="https://muadogocu.vn/tu-quan-ao-3-buong-hong-go-gu/">Tủ quần áo 3 buồng hồng gỗ gụ</a></p>
                           </div>
                           <div class="price-wrapper"></div>
                        </div>
                        <!-- box-text -->
                     </div>
                     <!-- box -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- col -->
               <div class="col">
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1"></div>
                     <div class="product-small box has-hover box-normal box-text-bottom">
                        <div class="box-image">
                           <div class="">
                              <a href="https://muadogocu.vn/bo-ban-ghe-an-go-gu-ta-my-ha/">
                              <img width="300" height="300" src="https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-6-ghe-go-gu-ta-hang-my-duc_1-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Bộ bàn ghế ăn gỗ gụ ta Mỹ Hà Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-6-ghe-go-gu-ta-hang-my-duc_1-300x300.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-6-ghe-go-gu-ta-hang-my-duc_1-280x280.jpg 280w, https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-an-6-ghe-go-gu-ta-hang-my-duc_1-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" title="Bộ bàn ghế ăn gỗ gụ ta Mỹ Hà Classic Shop"></a>
                           </div>
                           <div class="image-tools top right show-on-hover">
                              <div class="wishlist-icon">
                                 <button class="wishlist-button button is-outline circle icon">
                                 <i class="icon-heart"></i>       </button>
                                 <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-299">
                                       <div class="yith-wcwl-add-button show" style="display:block">
                                          <a href="/?add_to_wishlist=299" rel="nofollow" data-product-id="299" data-product-type="simple" class="add_to_wishlist">
                                          Add to Wishlist</a>
                                          <img src="https://muadogocu.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading Classic Shop" width="16" height="16" style="visibility:hidden" title="Classic Shop">
                                       </div>
                                       <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="https://muadogocu.vn/bo-ban-ghe-an-go-gu-ta-my-ha/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="https://muadogocu.vn/bo-ban-ghe-an-go-gu-ta-my-ha/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div style="clear:both"></div>
                                       <div class="yith-wcwl-wishlistaddresponse"></div>
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center is-large">
                           <div class="title-wrapper">
                              <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 Nội Thất Phòng Bếp      
                              </p>
                              <p class="name product-title"><a href="https://muadogocu.vn/bo-ban-ghe-an-go-gu-ta-my-ha/">Bộ bàn ghế ăn gỗ gụ ta Mỹ Hà</a></p>
                           </div>
                           <div class="price-wrapper"></div>
                        </div>
                        <!-- box-text -->
                     </div>
                     <!-- box -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- col -->
               <div class="col">
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1"></div>
                     <div class="product-small box has-hover box-normal box-text-bottom">
                        <div class="box-image">
                           <div class="">
                              <a href="https://muadogocu.vn/ban-ghe-guot-dao-trac-6-mon-dep-xuat-sac/">
                              <img width="300" height="300" src="https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-guot-dao_2-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Bộ bàn ghế guột đào gỗ Trắc 6 món đẹp xuất sắc Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-guot-dao_2-300x300.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-guot-dao_2-280x280.jpg 280w, https://muadogocu.vn/wp-content/uploads/2018/09/bo-ban-ghe-guot-dao_2-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" title="Bộ bàn ghế guột đào gỗ Trắc 6 món đẹp xuất sắc Classic Shop"></a>
                           </div>
                           <div class="image-tools top right show-on-hover">
                              <div class="wishlist-icon">
                                 <button class="wishlist-button button is-outline circle icon">
                                 <i class="icon-heart"></i>       </button>
                                 <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-239">
                                       <div class="yith-wcwl-add-button show" style="display:block">
                                          <a href="/?add_to_wishlist=239" rel="nofollow" data-product-id="239" data-product-type="simple" class="add_to_wishlist">
                                          Add to Wishlist</a>
                                          <img src="https://muadogocu.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading Classic Shop" width="16" height="16" style="visibility:hidden" title="Classic Shop">
                                       </div>
                                       <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="https://muadogocu.vn/ban-ghe-guot-dao-trac-6-mon-dep-xuat-sac/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="https://muadogocu.vn/ban-ghe-guot-dao-trac-6-mon-dep-xuat-sac/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div style="clear:both"></div>
                                       <div class="yith-wcwl-wishlistaddresponse"></div>
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center is-large">
                           <div class="title-wrapper">
                              <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 Nội Thất Phòng Khách    
                              </p>
                              <p class="name product-title"><a href="https://muadogocu.vn/ban-ghe-guot-dao-trac-6-mon-dep-xuat-sac/">Bộ bàn ghế guột đào gỗ Trắc 6 món đẹp xuất sắc</a></p>
                           </div>
                           <div class="price-wrapper"></div>
                        </div>
                        <!-- box-text -->
                     </div>
                     <!-- box -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- col -->
               <div class="col">
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1"></div>
                     <div class="product-small box has-hover box-normal box-text-bottom">
                        <div class="box-image">
                           <div class="">
                              <a href="https://muadogocu.vn/tu-quan-ao-2-canh-go-gu-ta/">
                              <img width="300" height="300" src="https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-2-canh-go-gu-ta-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Tủ quần áo 2 cánh gỗ gụ ta Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-2-canh-go-gu-ta-300x300.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-2-canh-go-gu-ta-300x300-280x280.jpg 280w, https://muadogocu.vn/wp-content/uploads/2018/09/tu-quan-ao-2-canh-go-gu-ta-300x300-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" title="Tủ quần áo 2 cánh gỗ gụ ta Classic Shop"></a>
                           </div>
                           <div class="image-tools top right show-on-hover">
                              <div class="wishlist-icon">
                                 <button class="wishlist-button button is-outline circle icon">
                                 <i class="icon-heart"></i>       </button>
                                 <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-273">
                                       <div class="yith-wcwl-add-button show" style="display:block">
                                          <a href="/?add_to_wishlist=273" rel="nofollow" data-product-id="273" data-product-type="simple" class="add_to_wishlist">
                                          Add to Wishlist</a>
                                          <img src="https://muadogocu.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading Classic Shop" width="16" height="16" style="visibility:hidden" title="Classic Shop">
                                       </div>
                                       <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="https://muadogocu.vn/tu-quan-ao-2-canh-go-gu-ta/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="https://muadogocu.vn/tu-quan-ao-2-canh-go-gu-ta/" rel="nofollow">
                                          Browse Wishlist           </a>
                                       </div>
                                       <div style="clear:both"></div>
                                       <div class="yith-wcwl-wishlistaddresponse"></div>
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center is-large">
                           <div class="title-wrapper">
                              <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 Nội Thất Phòng Ngủ      
                              </p>
                              <p class="name product-title"><a href="https://muadogocu.vn/tu-quan-ao-2-canh-go-gu-ta/">Tủ quần áo 2 cánh gỗ gụ ta</a></p>
                           </div>
                           <div class="price-wrapper"></div>
                        </div>
                        <!-- box-text -->
                     </div>
                     <!-- box -->
                  </div>
                  <!-- .col-inner -->
               </div>
              
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
               <div class="col post-item"> <!-- loop từ div này -->
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/mua-do-go-cu-do-go-co-gia-co-sap-gu-tu-che/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="600" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-cu-600x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Mua đồ gỗ cũ đồ gỗ cổ giả cổ sập gụ tủ chè các loại Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-cu-600x400.jpg 600w, https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-cu-768x512.jpg 768w, https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-cu.jpg 800w" sizes="(max-width: 600px) 100vw, 600px" title="Mua đồ gỗ cũ đồ gỗ cổ giả cổ sập gụ tủ chè các loại Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Mua đồ gỗ cũ đồ gỗ cổ giả cổ sập gụ tủ chè các loại</h5>
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
               <!-- .col -->
               <div class="col post-item">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/mua-trac-gu-mun-huong-cam-lai-cac-loai-quy-khac/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="533" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/thu-mua-do-go-tai-quan-tay-ho-cam-ket-gia-cao-2-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Mua đồ gỗ trắc, gỗ gụ, mun, hương, cẩm lai và các loại gỗ quý khác Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/thu-mua-do-go-tai-quan-tay-ho-cam-ket-gia-cao-2-533x400.jpg 533w, https://muadogocu.vn/wp-content/uploads/2018/09/thu-mua-do-go-tai-quan-tay-ho-cam-ket-gia-cao-2-768x576.jpg 768w, https://muadogocu.vn/wp-content/uploads/2018/09/thu-mua-do-go-tai-quan-tay-ho-cam-ket-gia-cao-2-600x450.jpg 600w, https://muadogocu.vn/wp-content/uploads/2018/09/thu-mua-do-go-tai-quan-tay-ho-cam-ket-gia-cao-2.jpg 960w" sizes="(max-width: 533px) 100vw, 533px" title="Mua đồ gỗ trắc, gỗ gụ, mun, hương, cẩm lai và các loại gỗ quý khác Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Mua đồ gỗ trắc, gỗ gụ, mun, hương, cẩm lai và các loại gỗ quý khác</h5>
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
               <!-- .col -->
               <div class="col post-item">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/don-vi-thu-mua-go-trac-tai-ha-noi-gia-tot/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="533" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-tai-quan-thanh-xuan-uy-tin-2-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Đơn vị thu mua đồ gỗ trắc tại Hà Nội giá tốt Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-tai-quan-thanh-xuan-uy-tin-2-533x400.jpg 533w, https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-tai-quan-thanh-xuan-uy-tin-2.jpg 768w, https://muadogocu.vn/wp-content/uploads/2018/09/mua-do-go-tai-quan-thanh-xuan-uy-tin-2-600x450.jpg 600w" sizes="(max-width: 533px) 100vw, 533px" title="Đơn vị thu mua đồ gỗ trắc tại Hà Nội giá tốt Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Đơn vị thu mua đồ gỗ trắc tại Hà Nội giá tốt</h5>
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
               <!-- .col -->
               <div class="col post-item">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/thu-mua-go-cu-thanh-ly-lien-0936-802-888-de-co-gia-tot-nhat/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="300" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/Mua-ban-ghe-go-cu-dia-chi-thu-mua-ban-ghe-go-cu-tai-ha-noi-1-300x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Thu mua đồ gỗ cũ thanh lý – Liên hệ 0936.802.888 để có giá tốt nhất Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/Mua-ban-ghe-go-cu-dia-chi-thu-mua-ban-ghe-go-cu-tai-ha-noi-1-300x400.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/Mua-ban-ghe-go-cu-dia-chi-thu-mua-ban-ghe-go-cu-tai-ha-noi-1.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" title="Thu mua đồ gỗ cũ thanh lý – Liên hệ 0936.802.888 để có giá tốt nhất Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Thu mua đồ gỗ cũ thanh lý – Liên hệ 0936.802.888 để có giá tốt nhất</h5>
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
               <!-- .col -->
               <div class="col post-item">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/mua-ban-ghe-go-cu-dia-chi-thu-mua-ban-ghe-go-cu-tai-ha-noi/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="535" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/Mua-ban-ghe-go-cu-dia-chi-thu-mua-ban-ghe-go-cu-tai-ha-noi-2-535x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Mua bàn ghế gỗ cũ – Địa chỉ thu mua bàn ghế gỗ cũ tại Hà Nội Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/Mua-ban-ghe-go-cu-dia-chi-thu-mua-ban-ghe-go-cu-tai-ha-noi-2-535x400.jpg 535w, https://muadogocu.vn/wp-content/uploads/2018/09/Mua-ban-ghe-go-cu-dia-chi-thu-mua-ban-ghe-go-cu-tai-ha-noi-2.jpg 600w" sizes="(max-width: 535px) 100vw, 535px" title="Mua bàn ghế gỗ cũ – Địa chỉ thu mua bàn ghế gỗ cũ tại Hà Nội Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Mua bàn ghế gỗ cũ – Địa chỉ thu mua bàn ghế gỗ cũ tại Hà Nội</h5>
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
               <!-- .col -->
               <div class="col post-item">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/mua-tu-quan-ao-go-cu-go-quy-cac-loai-gia-tot/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="300" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/Mua-tu-quan-ao-go-cu-go-quy-cac-loai-gia-tot-3-300x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Mua tủ quần áo gỗ cũ – gỗ quý – các loại giá tốt Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/Mua-tu-quan-ao-go-cu-go-quy-cac-loai-gia-tot-3-300x400.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/Mua-tu-quan-ao-go-cu-go-quy-cac-loai-gia-tot-3.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" title="Mua tủ quần áo gỗ cũ – gỗ quý – các loại giá tốt Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Mua tủ quần áo gỗ cũ – gỗ quý – các loại giá tốt</h5>
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
               <!-- .col -->
               <div class="col post-item">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/mua-sap-gu-tu-che-dia-chi-thu-mua-sap-cu-tu-che-cu-uy-tin-gia-cao/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="400" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/3-400x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Mua sập gụ, tủ chè – Địa chỉ thu mua sập cũ, tủ chè cũ uy tín, giá cao Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/3-400x400.jpg 400w, https://muadogocu.vn/wp-content/uploads/2018/09/3-280x280.jpg 280w, https://muadogocu.vn/wp-content/uploads/2018/09/3-300x300.jpg 300w, https://muadogocu.vn/wp-content/uploads/2018/09/3.jpg 600w, https://muadogocu.vn/wp-content/uploads/2018/09/3-100x100.jpg 100w" sizes="(max-width: 400px) 100vw, 400px" title="Mua sập gụ, tủ chè – Địa chỉ thu mua sập cũ, tủ chè cũ uy tín, giá cao Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Mua sập gụ, tủ chè – Địa chỉ thu mua sập cũ, tủ chè cũ uy tín, giá cao</h5>
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
               <!-- .col -->
               <div class="col post-item">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/cua-hang-thu-mua-do-go-cu-o-dau-tra-gia-cao-nhat/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:56.25%;">
                                 <img width="537" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/Cua-hang-thu-mua-do-go-cu-o-dau-tra-gia-cao-nhat-4-1-537x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Cửa hàng thu mua đồ gỗ cũ ở đâu trả giá cao nhất? Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/Cua-hang-thu-mua-do-go-cu-o-dau-tra-gia-cao-nhat-4-1-537x400.jpg 537w, https://muadogocu.vn/wp-content/uploads/2018/09/Cua-hang-thu-mua-do-go-cu-o-dau-tra-gia-cao-nhat-4-1.jpg 600w" sizes="(max-width: 537px) 100vw, 537px" title="Cửa hàng thu mua đồ gỗ cũ ở đâu trả giá cao nhất? Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Cửa hàng thu mua đồ gỗ cũ ở đâu trả giá cao nhất?</h5>
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
               <!-- .col -->
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
                           <p style="text-align: center;"><span style="font-size: 260%; color: #ffffff;">0936 802 888</span></p>
                        </div>
                     </div>
                     <div class="col medium-9 small-12 large-9">
                        <div class="col-inner">
                           <p><span style="font-size: 130%; font-family: 'Times New Roman', Times; color: #ffffff;"><img class="" src="https://toidendatchuan.com/wp-content/uploads/2018/09/bullet.png" alt="Classic Shop" width="14" height="14" title="Classic Shop"> Đồ gỗ cũ Tiến Thắng chuyên thu mua đồ gỗ cũ, đồ gỗ cổ cổ và giả cổ các loại như:</span><br><span style="font-size: 130%; font-family: 'Times New Roman', Times; color: #ffffff;">Nội thất phòng khách bàn ghế tủ kệ, sập gụ, tủ chè, tủ tường, tủ bày đồ…</span><br><span style="font-size: 130%; font-family: 'Times New Roman', Times; color: #ffffff;">Nội thất phòng ngủ: Tủ quần áo, bàn trang điểm, giường ngủ…</span><br><span style="font-size: 130%; font-family: 'Times New Roman', Times; color: #ffffff;">Nội thất phòng bếp: Bàn ghế ăn, tủ bếp…</span></p>
                           <p><span style="color: #ffffff;"><span style="font-size: 130%; font-family: 'Times New Roman', Times;"><img class="" src="https://toidendatchuan.com/wp-content/uploads/2018/09/bullet.png" alt="Classic Shop" width="14" height="14" title="Classic Shop"></span><span style="font-size: 130%; font-family: 'Times New Roman', Times;">Trung tâm cũng bán ra các sản phẩm nội thất gỗ với giá ưu đãi nhất, quý khách có thể tham khảo danh mục sản phẩm của chúng tôi và lựa chọn sản phẩm ưng ý cho gia đình mình, cam kết chỉ bán ra sản phẩm những sản phẩm chất lượng</span></span></p>
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
                  background-image: url(https://muadogocu.vn/wp-content/uploads/2018/09/11313.jpg);
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
               <div class="col post-item" data-animate="bounceIn">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/can-mua-do-go-cu-huyen-me-linh-hang-sau-tuoi-gia-ca-hop-ly/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:70%;">
                                 <img width="533" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/77.mua-do-go-cu-huyen-me-linh-377.mua-do-go-cu-huyen-me-linh-3-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Cần mua đồ gỗ cũ Huyện Mê Linh 3 Cần mua đồ gỗ cũ Huyện Mê Linh hàng sâu tuổi, giá cả hợp lý Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/77.mua-do-go-cu-huyen-me-linh-377.mua-do-go-cu-huyen-me-linh-3-533x400.jpg 533w, https://muadogocu.vn/wp-content/uploads/2018/09/77.mua-do-go-cu-huyen-me-linh-377.mua-do-go-cu-huyen-me-linh-3.jpg 600w" sizes="(max-width: 533px) 100vw, 533px" title="Cần mua đồ gỗ cũ Huyện Mê Linh hàng sâu tuổi, giá cả hợp lý Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Cần mua đồ gỗ cũ Huyện Mê Linh hàng sâu tuổi, giá cả hợp lý</h5>
                                 <div class="is-divider"></div>
                                 <p class="from_the_blog_excerpt ">Cần mua đồ gỗ cũ Huyện Mê Linh hàng sâu tuổi, giá cả hợp lý [...]               </p>
                                 <button href="https://muadogocu.vn/can-mua-do-go-cu-huyen-me-linh-hang-sau-tuoi-gia-ca-hop-ly/" class="button  is-outline is-small mb-0">
                                 Xem Thêm...                </button>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                           <!-- .box-text -->
                           <div class="badge absolute top post-date badge-outline">
                              <div class="badge-inner">
                                 <span class="post-date-day">19</span><br><span class="post-date-month is-xsmall">Th9</span>
                              </div>
                           </div>
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- .col -->
               <div class="col post-item" data-animate="bounceIn">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/o-dau-thu-mua-do-go-cu-huyen-phu-xuyen-gia-tot/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:70%;">
                                 <img width="533" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/76.mua-do-go-cu-huyen-phu-xuyen-376.mua-do-go-cu-huyen-phu-xuyen-3-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="thu mua đồ gỗ cũ Huyện Phú Xuyên 3 Ở đâu thu mua đồ gỗ cũ Huyện Phú Xuyên giá tốt? Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/76.mua-do-go-cu-huyen-phu-xuyen-376.mua-do-go-cu-huyen-phu-xuyen-3-533x400.jpg 533w, https://muadogocu.vn/wp-content/uploads/2018/09/76.mua-do-go-cu-huyen-phu-xuyen-376.mua-do-go-cu-huyen-phu-xuyen-3.jpg 600w" sizes="(max-width: 533px) 100vw, 533px" title="Ở đâu thu mua đồ gỗ cũ Huyện Phú Xuyên giá tốt? Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Ở đâu thu mua đồ gỗ cũ Huyện Phú Xuyên giá tốt?</h5>
                                 <div class="is-divider"></div>
                                 <p class="from_the_blog_excerpt ">Ở đâu thu mua đồ gỗ cũ Huyện Phú Xuyên giá tốt? Mua đồ gỗ [...]              </p>
                                 <button href="https://muadogocu.vn/o-dau-thu-mua-do-go-cu-huyen-phu-xuyen-gia-tot/" class="button  is-outline is-small mb-0">
                                 Xem Thêm...                </button>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                           <!-- .box-text -->
                           <div class="badge absolute top post-date badge-outline">
                              <div class="badge-inner">
                                 <span class="post-date-day">19</span><br><span class="post-date-month is-xsmall">Th9</span>
                              </div>
                           </div>
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- .col -->
               <div class="col post-item" data-animate="bounceIn">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/bao-gia-thu-mua-do-go-cu-huyen-thuong-tin/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:70%;">
                                 <img width="533" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/75.mua-do-go-cu-huyen-thuong-tin-475.mua-do-go-cu-huyen-thuong-tin-4-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Báo giá thu mua đồ gỗ cũ Huyện Thường Tín 4 Báo giá thu mua đồ gỗ cũ Huyện Thường Tín Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/75.mua-do-go-cu-huyen-thuong-tin-475.mua-do-go-cu-huyen-thuong-tin-4-533x400.jpg 533w, https://muadogocu.vn/wp-content/uploads/2018/09/75.mua-do-go-cu-huyen-thuong-tin-475.mua-do-go-cu-huyen-thuong-tin-4.jpg 600w" sizes="(max-width: 533px) 100vw, 533px" title="Báo giá thu mua đồ gỗ cũ Huyện Thường Tín Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Báo giá thu mua đồ gỗ cũ Huyện Thường Tín</h5>
                                 <div class="is-divider"></div>
                                 <p class="from_the_blog_excerpt ">Báo giá thu mua đồ gỗ cũ Huyện Thường Tín Quý khách hàng có nhu [...]              </p>
                                 <button href="https://muadogocu.vn/bao-gia-thu-mua-do-go-cu-huyen-thuong-tin/" class="button  is-outline is-small mb-0">
                                 Xem Thêm...                </button>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                           <!-- .box-text -->
                           <div class="badge absolute top post-date badge-outline">
                              <div class="badge-inner">
                                 <span class="post-date-day">19</span><br><span class="post-date-month is-xsmall">Th9</span>
                              </div>
                           </div>
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- .col -->
               <div class="col post-item" data-animate="bounceIn">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/mua-do-go-cu-huyen-ung-hoa-phuc-vu-chuyen-nghiep/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:70%;">
                                 <img width="535" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/74.mua-do-go-cu-huyen-ung-hoa-274.mua-do-go-cu-huyen-ung-hoa-2-535x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Mua đồ gỗ cũ huyện Ứng Hòa 2 Mua đồ gỗ cũ huyện Ứng Hòa phục vụ chuyên nghiệp Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/74.mua-do-go-cu-huyen-ung-hoa-274.mua-do-go-cu-huyen-ung-hoa-2-535x400.jpg 535w, https://muadogocu.vn/wp-content/uploads/2018/09/74.mua-do-go-cu-huyen-ung-hoa-274.mua-do-go-cu-huyen-ung-hoa-2.jpg 600w" sizes="(max-width: 535px) 100vw, 535px" title="Mua đồ gỗ cũ huyện Ứng Hòa phục vụ chuyên nghiệp Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Mua đồ gỗ cũ huyện Ứng Hòa phục vụ chuyên nghiệp</h5>
                                 <div class="is-divider"></div>
                                 <p class="from_the_blog_excerpt ">Mua đồ gỗ cũ huyện Ứng Hòa phục vụ chuyên nghiệp Gia đình bạn có [...]             </p>
                                 <button href="https://muadogocu.vn/mua-do-go-cu-huyen-ung-hoa-phuc-vu-chuyen-nghiep/" class="button  is-outline is-small mb-0">
                                 Xem Thêm...                </button>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                           <!-- .box-text -->
                           <div class="badge absolute top post-date badge-outline">
                              <div class="badge-inner">
                                 <span class="post-date-day">19</span><br><span class="post-date-month is-xsmall">Th9</span>
                              </div>
                           </div>
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- .col -->
               <div class="col post-item" data-animate="bounceIn">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/can-mua-do-go-cu-huyen-my-duc-goi-ngay-0936802888/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:70%;">
                                 <img width="533" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/can-mua-do-go-cu-huyen-my-duc-1-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="mua đồ gỗ cũ Huyện Mỹ Đức 1 Cần mua đồ gỗ cũ Huyện Mỹ Đức gọi ngay 0936.802.888 Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/can-mua-do-go-cu-huyen-my-duc-1-533x400.jpg 533w, https://muadogocu.vn/wp-content/uploads/2018/09/can-mua-do-go-cu-huyen-my-duc-1-768x576.jpg 768w, https://muadogocu.vn/wp-content/uploads/2018/09/can-mua-do-go-cu-huyen-my-duc-1-1067x800.jpg 1067w, https://muadogocu.vn/wp-content/uploads/2018/09/can-mua-do-go-cu-huyen-my-duc-1-600x450.jpg 600w, https://muadogocu.vn/wp-content/uploads/2018/09/can-mua-do-go-cu-huyen-my-duc-1.jpg 1280w" sizes="(max-width: 533px) 100vw, 533px" title="Cần mua đồ gỗ cũ Huyện Mỹ Đức gọi ngay 0936.802.888 Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Cần mua đồ gỗ cũ Huyện Mỹ Đức gọi ngay 0936.802.888</h5>
                                 <div class="is-divider"></div>
                                 <p class="from_the_blog_excerpt ">Cần mua đồ gỗ cũ Huyện Mỹ Đức gọi ngay 0936.802.888 Bạn đang có nhu [...]             </p>
                                 <button href="https://muadogocu.vn/can-mua-do-go-cu-huyen-my-duc-goi-ngay-0936802888/" class="button  is-outline is-small mb-0">
                                 Xem Thêm...                </button>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                           <!-- .box-text -->
                           <div class="badge absolute top post-date badge-outline">
                              <div class="badge-inner">
                                 <span class="post-date-day">19</span><br><span class="post-date-month is-xsmall">Th9</span>
                              </div>
                           </div>
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- .col -->
               <div class="col post-item" data-animate="bounceIn">
                  <div class="col-inner">
                     <a href="https://muadogocu.vn/do-go-tien-thang-chuyen-mua-do-go-cu-huyen-thanh-oai-gia-chuan/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image">
                              <div class="image-cover" style="padding-top:70%;">
                                 <img width="533" height="400" src="https://muadogocu.vn/wp-content/uploads/2018/09/72.mua-do-go-cu-huyen-thanh-oai-272.mua-do-go-cu-huyen-thanh-oai-2-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="mua đồ gỗ cũ Huyện Thanh Oai 2 Đồ gỗ Tiến Thắng chuyên mua đồ gỗ cũ Huyện Thanh Oai giá chuẩn Classic Shop" srcset="https://muadogocu.vn/wp-content/uploads/2018/09/72.mua-do-go-cu-huyen-thanh-oai-272.mua-do-go-cu-huyen-thanh-oai-2-533x400.jpg 533w, https://muadogocu.vn/wp-content/uploads/2018/09/72.mua-do-go-cu-huyen-thanh-oai-272.mua-do-go-cu-huyen-thanh-oai-2.jpg 600w" sizes="(max-width: 533px) 100vw, 533px" title="Đồ gỗ Tiến Thắng chuyên mua đồ gỗ cũ Huyện Thanh Oai giá chuẩn Classic Shop">
                              </div>
                           </div>
                           <!-- .box-image -->
                           <div class="box-text text-center is-large">
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large ">Đồ gỗ Tiến Thắng chuyên mua đồ gỗ cũ Huyện Thanh Oai giá chuẩn</h5>
                                 <div class="is-divider"></div>
                                 <p class="from_the_blog_excerpt ">Đồ gỗ Tiến Thắng chuyên mua đồ gỗ cũ Huyện Thanh Oai giá chuẩn Đồ [...]               </p>
                                 <button href="https://muadogocu.vn/do-go-tien-thang-chuyen-mua-do-go-cu-huyen-thanh-oai-gia-chuan/" class="button  is-outline is-small mb-0">
                                 Xem Thêm...                </button>
                              </div>
                              <!-- .box-text-inner -->
                           </div>
                           <!-- .box-text -->
                           <div class="badge absolute top post-date badge-outline">
                              <div class="badge-inner">
                                 <span class="post-date-day">19</span><br><span class="post-date-month is-xsmall">Th9</span>
                              </div>
                           </div>
                        </div>
                        <!-- .box -->
                     </a>
                     <!-- .link -->
                  </div>
                  <!-- .col-inner -->
               </div>
               <!-- .col -->
             
            </div>
         </div>
      </main>
@endsection
