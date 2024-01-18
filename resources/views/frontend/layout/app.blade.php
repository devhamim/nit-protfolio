<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ $setting->first()->title }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">


</head>

<body>

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->

    <!--====== HEADER PART START ======-->

    @include('frontend.layout.header')

    <!--====== HEADER PART ENDS ======-->

    @yield('content')

    <!--====== FOOTER PART START ======-->

    @include('frontend.layout.footer')

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP START ======-->

    <a class="back-to-top">
        <i class="fal fa-angle-up"></i>
    </a>

    <!--====== BACK TO TOP ENDS ======-->

<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "132368686627244");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>



    <!--====== jquery js ======-->
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>

    <!--====== appear js ======-->
    <script src="{{ asset('frontend') }}/assets/js/jquery.appear.min.js"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

</body>
</html>
