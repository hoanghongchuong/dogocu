@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-archive page-wrapper">
        <header class="archive-page-header">
           <div class="row">
              <div class="large-12 text-center col">
                 <h1 class="page-title is-large uppercase">
                   <span>Dịch vụ / {{$tintuc_cate->name}}</span>   
                 </h1>
              </div>
           </div>
        </header>
        
        <div class="row row-md row-large row-divided ">
            <div class="md-9  large-9 col">
                <div class="row">
                    @foreach($data as $item)
                    <div class="col md-6 large-6">
                        <div class="img">
                           <a href="{{url('dich-vu/'.$item->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}"></a>
                        </div>
                        <div class="text">
                           <h1><a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h1>
                           <p>{!! $item->mota !!}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="pagination">{!! $data->links() !!}</div>
                </div> 
              
              
            </div>
           <!-- .large-9 -->
           <div class="post-sidebar large-3 col">
              <div id="secondary" class="widget-area " role="complementary">
                 <aside id="text-13" class="widget widget_text">
                    <span class="widget-title "><span>Về Chúng Tôi</span></span>
                    <div class="is-divider small"></div>
                    <div class="textwidget">
                       <p>{!! $about->mota !!}
                       </p>
                    </div>
                 </aside>
                 <aside id="flatsome_recent_posts-17" class="widget flatsome_recent_posts">
                    <span class="widget-title "><span>Bài Viết Gần Đây</span></span>
                    <div class="is-divider small"></div>
                    <ul>
                        @foreach($tintuc as $item)
                        <li class="recent-blog-posts-li">
                          <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                             <!-- .flex-col -->
                             <div class="flex-col flex-grow">
                                <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a>
                                <span class="post_comments op-7 block is-xsmall"><a href="{{url('tin-tuc/'.$item->alias.'.html')}}"></a></span>
                             </div>
                          </div>
                          <!-- .flex-row -->
                        </li>
                        @endforeach
                    </ul>
                </aside>
                 
              </div>
              <!-- #secondary -->
           </div>
           <!-- .post-sidebar -->
        </div>
       
    </div>
     <!-- .page-wrapper .blog-wrapper -->
</main>
@endsection