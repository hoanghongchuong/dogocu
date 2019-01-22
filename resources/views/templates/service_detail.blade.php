@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<main id="main" class="" style="margin-top: 30px;">
   <div id="content" class="blog-wrapper blog-single page-wrapper">
      <div class="row row-large row-divided ">
         <div class="large-9 col">
            <article id="post-994" class="post-994 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc tag-tin-tuc">
               <div class="article-inner ">
                  <header class="entry-header">
                     <div class="entry-header-text entry-header-text-top text-center">
                        <h6 class="entry-category is-xsmall">
                           <a href="{{url('dich-vu')}}" rel="category tag">Dịch vụ</a>
                        </h6>
                        <h1 class="entry-title">{{$news_detail->name}}</h1>
                        <div class="entry-divider is-divider small"></div>
                        <div class="entry-meta uppercase is-xsmall">
                           <span class="posted-on">Ngày đăng: <a href="javascript:;" rel="bookmark"><time class="entry-date published"">{{date('d/m/Y', strtotime($news_detail->created_at))}}</time> 
                        </div>
                        <!-- .entry-meta -->
                     </div>
                     
                  </header>
                  <!-- post-header -->
                  <div class="entry-content single-page">                     
                      {!! $news_detail->content !!}                   
                  </div>
                 
               </div>
            </article>
            <!-- #-994 -->
           
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
                        @foreach($postSame as $item)
                        <li class="recent-blog-posts-li">
                          <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                             <!-- .flex-col -->
                             <div class="flex-col flex-grow">
                                <a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a>
                                <span class="post_comments op-7 block is-xsmall"><a href="{{url('dich-vu/'.$item->alias.'.html')}}"></a></span>
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
      </div>
   </div>
  </main>

@endsection

