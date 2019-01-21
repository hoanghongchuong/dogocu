<?php
    $setting = Cache::get('setting');
    $news_footer  = DB::table('news')->where('status',1)->where('com','tin-tuc')->take(4)->orderBy('id','desc')->get();

?>
<footer id="footer" class="footer-wrapper">
    <div class="footer-widgets footer footer-2 dark">
        <div class="row dark large-columns-3 mb-0">
           <div id="flatsome_recent_posts-19" class="col pb-0 widget flatsome_recent_posts">
              <span class="widget-title">Bài viết mới nhất</span>
              <div class="is-divider small"></div>
                <ul>
                    @foreach($news_footer as $news)
                    <li class="recent-blog-posts-li">
                        <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                           <div class="flex-col mr-half">
                              <div class="badge post-date  badge-outline">
                                 <div class="badge-inner bg-fill" style="background: url('{{asset('upload/news/'.$news->photo)}}'); border:0;">
                                 </div>
                              </div>
                           </div>
                           <!-- .flex-col -->
                           <div class="flex-col flex-grow">
                              <a href="{{url('tin-tuc/'.$news->alias.'.html')}}" title="{{$news->name}}">{{$news->name}}</a>
                              <span class="post_comments op-7 block is-xsmall"><a href="{{url('tin-tuc/'.$news->alias.'.html')}}"></a></span>
                           </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
           </div>
           <div id="text-15" class="col pb-0 widget widget_text">
              <span class="widget-title">FANPAGE</span>
              <div class="is-divider small"></div>
              <div class="textwidget">
                <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-width="350" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/noithaththome/" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}"></a></blockquote></div>
              </div>
           </div>
           <div id="text-14" class="col pb-0 widget widget_text">
              <span class="widget-title">THÔNG TIN LIÊN HỆ</span>
              <div class="is-divider small"></div>
              <div class="textwidget">
                 <p>Địa chỉ: <em><strong>{{$setting->address}}</strong> <br>
                    Hotline : <span style="font-size: 120%;"><a href="tel:{{$setting->phone}}"><strong>{{$setting->phone}}</strong></a></span><br />
                    Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                 </p>
              </div>
           </div>
        </div>
        <!-- end row -->
     </div>
     <!-- end footer 2 -->
    <div class="absolute-footer dark medium-text-center text-center">
        <div class="container clearfix">
           <div class="footer-primary pull-left">
              <div class="copyright-footer">
                 {{$setting->website}} 2019 <strong></strong>      
              </div>
           </div>
           <!-- .left -->
        </div>
        <!-- .container -->
    </div>
     <!-- .absolute-footer -->
    <a href="#top" class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1" id="top-link"><i class="icon-angle-up" ></i></a>
</footer>