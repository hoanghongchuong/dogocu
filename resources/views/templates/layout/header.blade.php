<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = DB::table('news_categories')->where('com', 'thiet-ke')->where('status',1)->where('parent_id', 0)->get();
?>
<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">        
        <!-- #header-top -->
        <div id="masthead" class="header-main ">
           <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
              <!-- Logo -->
              <div id="logo" class="flex-col logo">
                 <!-- Header logo -->
                 <a href="" title="{{$setting->title}}" rel="home">
                 <img width="200" height="90" src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="header_logo header-logo" alt="{{$setting->title}}"/><img  width="200" height="90" src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="header-logo-dark" alt="{{$setting->title}}"/></a>
              </div>
              <!-- Mobile Left Elements -->
              <div class="flex-col show-for-medium flex-left">
                 <ul class="mobile-nav nav nav-left ">
                    <li class="nav-icon has-icon">
                       <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">
                       <i class="icon-menu" ></i>
                       </a>
                    </li>
                 </ul>
              </div>
              <!-- Left Elements -->
              <div class="flex-col hide-for-medium flex-left
                 flex-grow">
                 <ul class="header-nav header-nav-main nav nav-left  nav-uppercase" style="width: 635px;">
                    <li id="menu-item-459" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active  menu-item-459"><a href="{{url('')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-admin-multisite" aria-hidden="true"></i><span>TRANG CHỦ</span></a>
                    </li>
                    <li id="menu-item-462" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-462"><a href="{{url('gioi-thieu')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-welcome-edit-page" aria-hidden="true"></i><span>Giới Thiệu</span></a>
                    </li>
                    <li id="menu-item-460" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-460"><a href="{{url('dich-vu')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-forms" aria-hidden="true"></i><span>Dịch Vụ</span></a>
                    </li>
                    <li id="menu-item-464" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-464"><a href="{{url('san-pham')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-vault" aria-hidden="true"></i><span>Sản Phẩm</span></a>
                    </li>
                    <li id="menu-item-461" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-461"><a href="{{url('tin-tuc')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-testimonial" aria-hidden="true"></i><span>Tin Tức</span></a>
                    </li>
                    <li id="menu-item-463" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-463"><a href="{{url('lien-he')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-phone" aria-hidden="true"></i><span>Liên Hệ</span></a>
                    </li>
                 </ul>
              </div>
              <!-- Right Elements -->
              <div class="flex-col hide-for-medium flex-right">
                 <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                    <li class="header-search-form search-form html relative has-icon">
                       <div class="header-search-form-wrapper">
                          <div class="searchform-wrapper ux-search-box relative form- is-normal">
                             <form role="search" method="get" class="searchform" action="{{route('search')}}">
                                <div class="flex-row relative">
                                   <div class="flex-col flex-grow">
                                      <input type="search" class="search-field mb-0" name="txtSearch" value="" placeholder="Tìm kiếm &hellip;" />
                                   </div>
                                   <!-- .flex-col -->
                                    <div class="flex-col">
                                        <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                        <i class="icon-search" ></i>           
                                        </button>
                                    </div>
                                   <!-- .flex-col -->
                                </div>
                                <!-- .flex-row -->
                                <div class="live-search-results text-left z-top"></div>
                             </form>
                          </div>
                       </div>
                    </li>
                 </ul>
              </div>
              <!-- Mobile Right Elements -->
              
           </div>
           <!-- .header-inner -->
          
           <div class="container">
              <div class="top-divider full-width"></div>
           </div>
        </div>
        <!-- .header-main -->
        <div class="header-bg-container fill">
           <div class="header-bg-image fill"></div>
           <div class="header-bg-color fill"></div>
        </div>
        <!-- .header-bg-container -->   
    </div>
    
</header>
<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
         <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
            <li class="header-search-form search-form html relative has-icon">
               <div class="header-search-form-wrapper">
                  <div class="searchform-wrapper ux-search-box relative form- is-normal">
                     <form role="search" method="get" class="searchform" action="{{route('search')}}">
                        <div class="flex-row relative">
                           <div class="flex-col flex-grow">
                              <input type="search" class="search-field mb-0" name="txtSearch" value="" placeholder="Tìm kiếm&hellip;" />
                             
                           </div>
                           <!-- .flex-col -->
                            <div class="flex-col">
                                <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                              <i class="icon-search" ></i>           
                                </button>
                            </div>
                           <!-- .flex-col -->
                        </div>
                        <!-- .flex-row -->
                        <div class="live-search-results text-left z-top"></div>
                     </form>
                  </div>
               </div>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-459"><a href="{{url('')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-admin-multisite" aria-hidden="true"></i><span>TRANG CHỦ</span></a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-462"><a href="{{url('gioi-thieu')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-welcome-edit-page" aria-hidden="true"></i><span>Giới Thiệu</span></a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-460"><a href="{{url('dich-vu')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-forms" aria-hidden="true"></i><span>Dịch Vụ</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-464"><a href="{{url('san-pham')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-vault" aria-hidden="true"></i><span>Sản Phẩm</span></a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-461"><a href="{{url('tin-tuc')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-testimonial" aria-hidden="true"></i><span>Tin Tức</span></a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-463"><a href="{{url('lien-he')}}" class="nav-top-link"><i class="_mi _before dashicons dashicons-phone" aria-hidden="true"></i><span>Liên Hệ</span></a></li>
            
         </ul>
    </div>
      <!-- inner -->
</div>