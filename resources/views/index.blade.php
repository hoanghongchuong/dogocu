<!DOCTYPE html>
<html>
<head>
    <?php 
        $setting = Cache::get('setting'); 
        $product_list = Cache::get('product_list');
    ?>
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name='revisit-after' content='1 days' /> 
    <title><?php if(!empty($title)) echo $title; else echo $setting->title; ?></title>
    <meta name="author" content="{!! $setting->website !!}" />
    <meta name="copyright" content="GCO" />
    <meta name="keywords" content="<?php if(!empty($keyword)) echo $keyword; else echo $setting->keyword; ?>" />
    <meta name="description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:title" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:url" content="{!! $setting->website !!}" />
    <meta property="og:site_name" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php if(!empty($img_share)) echo $img_share; else echo asset('upload/hinhanh/'.$setting->photo) ?>" />
    <meta property="og:description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta name="googlebot" content="all, index, follow" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.764338, 106.69208" />
    <meta name="geo.placename" content="Hà Nội" />
    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />    
    <link rel="shortcut icon" href="{!! asset('upload/hinhanh/'.$setting->favico) !!}" type="image/png" />
    <link rel='stylesheet'  href="{{asset('public/css/dashicons.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/extra.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/styles.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/css.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/screen.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/uaf.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/jquery.selectBox.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/fl-icons.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/wishlist.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/addtoany.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/flatsome.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/flatsome-shop.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet'  href="{{asset('public/css/cus.css')}}" type='text/css' media='all' />
    <script type='text/javascript' src="{{asset('public/js/jquery.js')}}"></script>
    
    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
        window.token = '{{ csrf_token() }}';
   </script>
</head>
<body>
    <div class="main-wrapper" id="wrapper">
        @include('templates.layout.header')    
        @yield('content')
        @include('templates.layout.footer')

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    </div>
    
    {!! $setting->codechat !!}
    {{ $setting->analytics }}
    @yield('script')
    <script type='text/javascript' src="{{asset('public/js/jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/addtoany.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/js.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/scripts.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/front.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/add-to-cart.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/jquery.blockUI.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/js.cookie.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/jquery.selectBox.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/hoverIntent.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/add.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/flatsome.js')}}"></script>
   <!-- <script type='text/javascript' src='js/wishlist.js'></script> -->
    <script type='text/javascript' src="{{asset('public/js/flatsome-live-search.js')}}"></script>
   <!-- <script type='text/javascript' src='js/woocommerce.js'></script> -->
   <!-- <script type='text/javascript' src='js/wp-embed.min.js'></script> -->
</body>
</html>