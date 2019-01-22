@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="shop-page-title category-page-title page-title ">
    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
           <div class="is-large">
              <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{url('')}}">Trang chủ</a> <span class="divider">/</span> Sản phẩm</nav>
           </div>
           <div class="category-filtering category-filter-row show-for-medium">
              <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
              <i class="icon-menu"></i>
              <strong>Lọc</strong>
              </a>
              <div class="inline-block">
              </div>
           </div>
        </div>
        <!-- .flex-left -->
        <div class="flex-col medium-text-center">          
            <form class="woocommerce-ordering" id="filter_products" method="get">
                <select name="sort_order" class="orderby filter_list_product">                 
                    <option value="">Sắp xếp</option>
                    <option value="desc">Mới nhất</option>
                    <option value="asc">Cũ nhất</option>                 
                </select>                
            </form>
        </div>
        <!-- .flex-right -->
     </div>
     <!-- flex-row -->
</div>
  <!-- .page-title -->
<main id="main" class="">
    <div class="row category-page-row">
        <div class="col large-3 hide-for-medium ">
           <div id="shop-sidebar" class="sidebar-inner col-inner">
              <aside id="woocommerce_product_categories-13" class="widget woocommerce widget_product_categories">
                 <span class="widget-title shop-sidebar">Danh mục</span>
                 <div class="is-divider small"></div>
                 <ul class="product-categories">
                    @foreach($cate_pro as $cate)
                    <li class="cat-item cat-item-26"><a href="{{url('san-pham/'.$cate->alias)}}">{{$cate->name}}</a></li>
                    @endforeach
                 </ul>
              </aside>
           </div>
           <!-- .sidebar-inner -->
        </div>
        <!-- #shop-sidebar -->
        <div class="col large-9">
            <div class="shop-container">
                <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
                    @foreach($products as $item)                   
                    <div class="product-small col has-hover post-283 product type-product status-publish has-post-thumbnail product_cat-noi-that-phong-ngu product_tag-noi-that-phong-ngu first instock shipping-taxable product-type-simple">
                        <div class="col-inner">
                           <div class="badge-container absolute left top z-1"></div>
                           <div class="product-small box ">
                              <div class="box-image">
                                 <div class="image-fade_in_back">
                                    <a href="{{url('san-pham/'.$item->alias.'.html')}}">
                                    <img width="300" height="300" src="{{asset('upload/product/'.$item->photo)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="{{$item->name}}" sizes="(max-width: 300px) 100vw, 300px" title="{{$item->name}}"></a>
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
                           </div>
                        </div>
                    </div>  
                    @endforeach
                </div>
                <div class="container">
                    <div class="pagination">{!! $products->links() !!}</div>
                </div>
            </div>
           <!-- shop container -->
        </div>
    </div>
</main>
@endsection
