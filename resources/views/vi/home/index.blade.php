<!DOCTYPE html>
<html lang="vi" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="profile" href="https://gmpg.org/xfn/11"> --}}

    <title>Moca Restaurant</title>
    {{-- <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//stackpath.bootstrapcdn.com' />
    <link rel='dns-prefetch' href='//s.w.org' /> --}}
    {{-- <link rel="alternate" type="application/rss+xml" title="Dòng thông tin SORAE &raquo;"
        href="/mocadining.com/vi/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi SORAE &raquo;"
        href="/mocadining.com/vi/comments/feed/" /> --}}
    <link rel='stylesheet' id='wp-block-library-css'
        href='{{ asset('/mocadining.com/wp-includes/css/dist/block-library/style.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{ asset('/mocadining.com/wp-content/plugins/contact-form-7/includes/css/styles.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='{{ asset('/mocadining.com/wp-content/plugins/revslider/public/assets/css/settings.css') }}'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='marco-main-stylesheet-css'
        href='{{ asset('/mocadining.com/wp-content/themes/marco/assets/css/app.css') }}' type='text/css'
        media='all' />
    <style id='marco-main-stylesheet-inline-css' type='text/css'>
        .homepage-slider1 .home-overlay,
        .homepage-slider2 .home-overlay,
        .homepage-video .home-overlay {
            background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.7) 100%);
            background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.7) 100%);
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.7) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b3000000', endColorstr='#b3000000', GradientType=0);
        }

        .main-navigation {
            background-color: rgba(255, 255, 255, 0);
        }

        .nav-dark-text .desktop-menu .main-navigation,
        .nav-dark-text .desktop-menu .menu-item-has-children .sub-menu {
            background: #0a0a0a;
        }

        .main-navigation .menu-item .sub-menu li a {
            color: #ffffff !important;
        }

        .nav-dark-text .menu-item-has-children .sub-menu {
            border-color: #ffffff !important;
        }

        .nav-dark-text .nav-items a,
        .nav-dark-text .nav-icons a,
        .nav-logo h1,
        .cart-icon .cart-icon-count {
            color: #ffffff;
        }

        .nav-dark-text .nav-items a:after,
        .nav-dark-text .nav-icons a:after {
            background: #ffffff;
        }

        .nav-dark-text .nav-items a:hover,
        .nav-dark-text .nav-icons a:hover {
            border-color: #ffffff;
        }

        .nav-dark-text #reorder-mobile line {
            stroke: #ffffff;
        }

        .cart-icon svg path {
            fill: #ffffff
        }

        @media screen and (min-width: 64.1em) {
            .main-navigation .nav-wrapper {
                height: 200px;
            }

            .nav-solid.nav-top .page-wrapper {
                padding-top: 200px;
            }

            .nav-solid.nav-top .page-wrapper .home-bg-slider {
                top: 200px;
            }

            .nav-solid.nav-bottom .page-wrapper .home-bg-slider {
                bottom: 200px;
            }

            .nav-transparent.nav-top .page-wrapper .home-content {
                padding-top: 200px;
            }

            .nav-transparent.nav-top .page-wrapper .home-content .home-top {
                top: 200px;
            }

            .nav-transparent.nav-top .homepage .home-slider-arrows .arrow-prev,
            .nav-transparent.nav-top .homepage .home-slider-arrows .arrow-next,
            .nav-transparent.nav-top .homepage .home-slider-text {
                top: calc(50% + 100px - 60px);
            }

            .nav-transparent.nav-bottom .page-wrapper .home-content {
                padding-bottom: 200px;
            }

            .nav-transparent.nav-bottom .page-wrapper .home-content .home-bottom {
                bottom: 200px;
            }

            .nav-transparent.nav-bottom .homepage .home-slider-arrows .arrow-prev,
            .nav-transparent.nav-bottom .homepage .home-slider-arrows .arrow-next,
            .nav-transparent.nav-bottom .homepage .home-slider-text {
                top: calc(50% - 100px + 60px);
            }

            .main-navigation .nav-logo a {
                padding: 50px 0;
            }

            .main-navigation .nav-logo img {
                height: calc(200px - 100px) !important;
            }
        }

        @media screen and (max-width: 64em) {
            .page-wrapper {
                top: -100px;
            }

            .main-navigation {
                height: 100px;
            }

            .main-navigation .nav-wrapper {
                height: 100px;
            }

            .nav-transparent .homepage .home-slider-text {
                top: calc(50% + 50px);
            }

            .nav-solid .page-wrapper {
                padding-top: 100px;
            }

            .nav-solid .page-wrapper .home-bg-slider {
                top: 100px;
            }

            .main-navigation .nav-logo a {
                padding: 15px 0 !important;
            }

            .main-navigation .nav-logo img {
                height: calc(100px - 30px)
            }
        }

        .footer {
            background-color: #0a0a0a;
            color: #ffffff !important
        }

        .footer .widget_recent_comments ul li>a,
        .footer .widget_rss .rsswidget {
            background-image: linear-gradient(to bottom, transparent 0%, transparent 95%, #ffffff 100%)
        }

        .footer select {
            border-color: #ffffff
        }

        .footer .search-input:after,
        .footer-content #scroll-up .button-border,
        .footer .newsletter-form .btn-newsletter .button-border,
        .footer .forms-style .mf-input:not(.message):after,
        .footer .forms-style .mf-input .border-label:after,
        .footer .link-hover:after {
            background: #ffffff;
        }

        .footer .search-submit path {
            fill: #ffffff
        }

        .footer .arrow-svg line {
            stroke: #ffffff
        }

        .footer .widget_calendar thead th,
        .footer .widget_calendar tfoot td,
        .footer abbr,
        .footer a,
        .footer cite,
        .footer select,
        .footer input,
        .footer span,
        .footer p,
        .footer .widget_recent_comments ul li,
        .footer .newsletter-form fieldset label {
            color: #ffffff !important
        }

        body,
        .page-wrapper,
        .btn-no-active:before {
            background: ;
        }

        .fixed-nav {
            background: #0d2527;
        }

        .fixed-nav>ul>li>a {
            color: #ffffff;
        }

        .fixed-nav>ul>li>a:after {
            background: #ffffff;
        }

        .fixed-nav .desktop-menu .menu-item-has-children .sub-menu {
            background: #0a0a0a;
        }

        .fixed-nav .menu-item-has-children .sub-menu a {
            color: #ffffff;
        }

        .mobile-navbar-helper {
            background: #111;
        }

        .mobile-navbar-overlay .menu-mobile li a {
            color: #fff;
        }

        .mobile-navbar-overlay .close-nav circle,
        .mobile-navbar-overlay .close-nav line {
            stroke: #fff;
        }

        .menu-mobile .menu-item-has-children .sub-menu a:after {
            background: #fff;
        }

        body,
        .page-wrapper {
            background: #fefefe;
        }

        .homepage .slider-text .slider-text-first,
        .homepage .slider-text .slider-text-second {
            background: rgba(0, 0, 0, 0);
            color: #fff;
        }

        .homepage .slider-text .slider-text-first {}

        .homepage .slider-text {
            text-align: center
        }

        .homepage .home-slider-pagination .slide-number,
        .homepage .home-social-media a,
        .homepage .btn-slider-1 a,
        .homepage .home-contact-info,
        .homepage .home-contact-info a,
        .homepage .home-video-controls a,
        .homepage .home-video-controls {
            color: #999999;
        }

        .homepage .home-slider-pagination:before,
        .homepage-slider2 .home-slider-pagination .progress-slide,
        .homepage .home-social-media a:after,
        .homepage .home-slider-pagination .vegas-timer-running .vegas-timer-progress {
            background: #999999;
        }

        .homepage .home-contact-info a:after {
            border-color: #999999;
        }

        .homepage-icon path {
            fill: #333;
        }

        .homepage-icon {
            background-color: #fff;
        }

        .btn-custom.btn-solid {
            background: ;
            color: ;
        }

        .btn-custom.btn-border-animate .btn-text {
            color: ;
        }

        .btn-custom.btn-border-animate .button-border {
            background-color: ;
        }
    </style>
    <link rel='stylesheet' id='js_composer_front-css'
        href='{{ asset('/mocadining.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='marco-child-style-css'
        href='{{ asset('/mocadining.com/wp-content/themes/marco-child/style.css') }}' type='text/css' media='all' />
    {{-- <link rel='stylesheet' id='datetimepicker-css'
        href='{{ asset('/mocadining.com/wp-content/themes/marco/assets/css/jquery.datetimepicker.min.css') }}'
        type='text/css' media='all' /> --}}
    <link rel='stylesheet' id='marco-google-fonts-css'
        href='//fonts.googleapis.com/css?family=Lato:400%2C700%2C400i%2C700i%7CLato:400%7CLato:400%7CLora:400i%7CLora:400i%7CLora:400i%7CLora:400i%7CLora:400i&#038;subset=latin'
        type='text/css' media='all' />
    <style id='marco-google-fonts-inline-css' type='text/css'>
        body {
            font-family: 'Lato', Arial, Helvetica, sans-serif;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Lato', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style: normal;
            letter-spacing: 0px;
        }

        .main-navigation .nav-items a,
        .fixed-nav>ul>li>a {
            font-family: 'Lato', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style: normal;
            letter-spacing: 2px;
            font-size: 12px;
        }

        .slider-text-first {
            font-family: 'Lora', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style: italic;
            letter-spacing: 0px;
        }

        .slider-text-second {
            font-family: 'Lora', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style: italic;
            letter-spacing: 0px;
        }

        .alt-h h1,
        .alt-h h2,
        .alt-h h3,
        .alt-h h4,
        .alt-h h5,
        .alt-h h6 {
            font-family: 'Lora', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style: italic;
            letter-spacing: 0px;
        }

        .food-menu-desc {
            font-family: 'Lora', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style: italic;
            letter-spacing: 0px;
        }

        .mosaic-info .mosaic-text {
            font-family: 'Lora', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style: italic;
            letter-spacing: 0px;
        }
    </style>
    <link rel='stylesheet' id='marco-font-awesome-css'
        href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css'
        media='all' />
    {{-- <script>
        if (document.location.protocol != "https:") {
            document.location = document.URL.replace(/^http:/i, "https:");
        }
    </script> --}}
    <script type='text/javascript' src='{{ asset('/mocadining.com/wp-includes/js/jquery/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('/mocadining.com/wp-includes/js/jquery/jquery-migrate.min.js') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js') }}'>
    </script>
    {{-- <link rel='https://api.w.org/' href='/mocadining.com/wp-json/' /> --}}
    {{-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/mocadining.com/xmlrpc.php?rsd" /> --}}
    {{-- <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="/mocadining.com/wp-includes/wlwmanifest.xml" />
    <link rel="canonical" href="/mocadining.com/vi/home-alt/" />
    <link rel='shortlink' href='/mocadining.com/' />
    <link rel="alternate" type="application/json+oembed"
        href="/mocadining.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.soraesushi.com%2Fvi%2Fhome-alt%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="/mocadining.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.soraesushi.com%2Fvi%2Fhome-alt%2F&#038;format=xml" /> --}}
    <link rel="alternate" href="/vi/home-alt/" hreflang="vi" />
    <link rel="alternate" href="/" hreflang="en" />

    <!-- Facebook Pixel Code -->
    {{-- <script type='text/javascript'>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    </script> --}}
    <!-- End Facebook Pixel Code -->
    {{-- <script type='text/javascript'>
        fbq('init', '493013747855495', [], {
            "agent": "wordpress-5.1.17-1.7.21"
        });
    </script>
    <script type='text/javascript'>
        fbq('track', 'PageView', []);
    </script> --}}
    <!-- Facebook Pixel Code -->
    {{-- <noscript>
        <img height="1" width="1" style="display:none" alt="fbpx"
            src="https://www.facebook.com/tr?id=493013747855495&ev=PageView&noscript=1" />
    </noscript> --}}
    <!-- End Facebook Pixel Code -->
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="/mocadining.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <meta name="generator"
        content="Powered by Slider Revolution 5.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="/mocadining.com/wp-content/uploads/2023/03/cropped-sorae-32x32.jpg"
        sizes="32x32" />
    <link rel="icon" href="/mocadining.com/wp-content/uploads/2023/03/cropped-sorae-192x192.jpg"
        sizes="192x192" />
    <link rel="apple-touch-icon-precomposed"
        href="/mocadining.com/wp-content/uploads/2023/03/cropped-sorae-180x180.jpg" />
    <meta name="msapplication-TileImage"
        content="/mocadining.com/wp-content/uploads/2023/03/cropped-sorae-270x270.jpg" />
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1485243761347 {
            padding-top: 90px !important;
            padding-bottom: 45px !important;
        }

        .vc_custom_1485175473981 {
            padding-top: 45px !important;
            padding-bottom: 90px !important;
        }

        .vc_custom_1485175494804 {
            padding-top: 45px !important;
            padding-bottom: 90px !important;
        }

        .vc_custom_1485165641158 {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }

        .vc_custom_1513757041814 {
            padding-right: 10% !important;
            padding-left: 10% !important;
        }

        .vc_custom_1533295759108 {
            padding-right: 10% !important;
            padding-left: 10% !important;
        }
    </style><noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96853966-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-96853966-1');
    </script>

    <!-- Facebook Pixel Code -->
    {{-- <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '114823488868110');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=114823488868110&ev=PageView&noscript=1" /></noscript> --}}
    <!-- End Facebook Pixel Code -->

    <!-- Meta Pixel Code -->
    {{-- <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '929701305007359');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=929701305007359&ev=PageView&noscript=1" /></noscript> --}}
    <!-- End Meta Pixel Code -->

    <!-- Google Tag Manager -->
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NZQ7CZB');
    </script> --}}
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Ads: 659698218 -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-659698218"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-659698218');
    </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
</head>

<body data-rsssl=1
    class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-661 nav-classes nav-left nav-center-ver nav-home nav-transparent nav-dark-text wpb-js-composer js-comp-ver-5.2.1 vc_responsive"
    data-height-fixed-nav="80">
    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZQ7CZB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->

    {{-- navigation-top --}}
    <div class="navigation-top">
        <div class="wrap">

            <div class="main-navigation nav-standard" id="nav-helper">
                <div class="row">
                    <div class="col-sm-12 columns">
                        <div class="nav-wrapper">
                            <div class="nav-logo nav-logo-dark nav-class-3">
                                <a href="/vi/home-alt/" class="show-in-viewport">
                                    <img src="/mocadining.com/wp-content/uploads/2023/03/MOCADINING.png"
                                        alt="" />
                                </a>
                            </div>
                            <div id="reorder-mobile" class="hide-for-large btn-mobile-overlay" style="">
                                <svg id="icon-burger" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="34px"
                                    viewBox="0 0 120 60" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable">
                                    <line id="line-top" x1="10" y1="59" x2="110"
                                        y2="59" shape-rendering="crispEdges" stroke="#fff"
                                        style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;" />
                                    <line id="line-center" x1="10" y1="30" x2="110"
                                        y2="30" shape-rendering="crispEdges" stroke="#fff"
                                        style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;" />
                                    <line id="line-bottom" x1="10" y1="1" x2="110"
                                        y2="1" shape-rendering="crispEdges" stroke="#fff"
                                        style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;" />
                                    <rect width="30px" height="30px" fill="none"></rect>
                                </svg>
                            </div>
                            <div class="show-for-large nav-items">
                                <ul id="top-menu" class="dropdown menu desktop-menu menu-main-menu">
                                    <li id="menu-item-21"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21">
                                        <a href="/vi/gioi-thieu/">Giới Thiệu</a>
                                    </li>
                                    <li id="menu-item-2560"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2560">
                                        <a href="/vi/thuc-don/">Thực Đơn</a>
                                    </li>
                                    <li id="menu-item-1459"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1459">
                                        <a href="/vi/events-2/">Events</a>
                                    </li>
                                    <li id="menu-item-851"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-851">
                                        <a href="/vi/hinh-anh/">Hình Ảnh</a>
                                    </li>
                                    <li id="menu-item-2634"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2634">
                                        <a href="/vi/tin-tuc-uu-dai/">Tin tức & Khuyến
                                            Mãi</a>
                                    </li>
                                    {{-- <li id="menu-item-2302"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2302">
                                        <a target="_blank" href="https://d1-concepts.com/dat-ban/">Đặt bàn</a>
                                    </li> --}}
                                    <li id="menu-item-2311"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2311">
                                        <a href="/vi/lien-he/">Liên Hệ</a>
                                    </li>
                                    {{-- <li id="menu-item-1952"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1952">
                                        <a target="_blank" href="https://d1-concepts.com/co-hoi-nghe-nghiep/">Nghề
                                            Nghiệp</a>
                                    </li> --}}
                                    {{-- <li id="menu-item-1088-en"
                                        class="lang-item lang-item-28 lang-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-1088-en">
                                        <a href="/mocadining.com/" hreflang="en-US" lang="en-US"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"
                                                title="EN" alt="EN" /></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- / --}}

    {{-- header --}}
    <div id="fixed-nav" class="page-header-nav fixed-nav show-for-large">
        <div class="nav-logo nav-logo-dark">
            <a href="/vi/home-alt/" class="show-in-viewport">
                <img src="/mocadining.com/wp-content/uploads/2023/03/MOCADINING.png" alt="">
            </a>
        </div>
        <ul id="fixed-top-menu" class="dropdown menu desktop-menu menu-main-menu">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a
                    href="/vi/gioi-thieu/">Giới Thiệu</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2560"><a
                    href="/vi/thuc-don/">Thực Đơn</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1459"><a
                    href="/vi/events-2/">Events</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-851"><a
                    href="/vi/hinh-anh/">Hình Ảnh</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2634"><a
                    href="/vi/tin-tuc-uu-dai/">Tin tức & Khuyến Mãi</a></li>
            {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2302"><a target="_blank"
                    href="https://d1-concepts.com/dat-ban/">Đặt bàn</a></li> --}}
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2311"><a
                    href="/vi/lien-he/">Liên Hệ</a></li>
            {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1952"><a target="_blank"
                    href="https://d1-concepts.com/co-hoi-nghe-nghiep/">Nghề Nghiệp</a></li> --}}
            {{-- <li
                class="lang-item lang-item-28 lang-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-1088-en">
                <a href="/mocadining.com/" hreflang="en-US" lang="en-US"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"
                        title="EN" alt="EN" /></a>
            </li> --}}
        </ul>
    </div>

    {{-- / --}}

    <div class="mobile-navbar-overlay nav-overlay-closed hide-for-large">
        <div class="close-nav btn-mobile-overlay">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" width="40px" height="40px" viewBox="0 0 100 100" xml:space="preserve">
                <circle cx="50" cy="50" r="40" stroke="#fff"
                    style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;" />
                <line x1="35" y1="35" x2="65" y2="65" stroke="#fff"
                    style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;" />
                <line x1="65" y1="35" x2="35" y2="65" stroke="#fff"
                    style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;" />
            </svg>
        </div>
        <div class="menu-main-menu-container">
            <ul id="menu-mobile" class="menu-mobile">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a
                        href="/vi/gioi-thieu/">Giới Thiệu</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2560"><a
                        href="/vi/thuc-don/">Thực Đơn</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1459"><a
                        href="/vi/events-2/">Events</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-851"><a
                        href="/vi/hinh-anh/">Hình Ảnh</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2634"><a
                        href="/vi/tin-tuc-uu-dai/">Tin tức & Khuyến Mãi</a></li>
                {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2302"><a target="_blank"
                        href="https://d1-concepts.com/dat-ban/">Đặt bàn</a></li> --}}
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2311"><a
                        href="/vi/lien-he/">Liên Hệ</a></li>
                {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1952"><a target="_blank"
                        href="https://d1-concepts.com/co-hoi-nghe-nghiep/">Nghề Nghiệp</a></li> --}}
                {{-- <li
                    class="lang-item lang-item-28 lang-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-1088-en">
                    <a href="/mocadining.com/" hreflang="en-US" lang="en-US"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"
                            title="EN" alt="EN" /></a>
                </li> --}}
            </ul>
        </div>
    </div>
    <div class="mobile-navbar-helper hide-for-large"></div>
    <div class="loading-wrapper">
        <div class="loading-progress"></div>
    </div>

    {{-- main --}}
    <div class="page-wrapper">



        <div class="homepage homepage-slider1" data-auto="true" data-transition="" data-duration="5000">
            <div class="home-bg-slider autoplay">
                <div class="home-overlay active-overlay"></div>
                <div class="home-slider-container">


                    <span class="single-slide"
                        data-slide="/mocadining.com/wp-content/uploads/2023/05/Ảnh-Sorae-thay-trên-web-1920x1080.png"></span>

                </div>
                <div class="row home-content">
                    <div class="small-12 columns">
                        <div class="content show-content">
                            <div class="home-slider-text">
                                <div class="slider-text">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="home-mobile-icon hide-for-large">
            <div class="icon-contact-mobile homepage-icon">
                <a class="phone-icon" href="tel:0819961997">
                    <svg version="1.1" id="icon-phone-contact" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 578.106 578.106"
                        xml:space="preserve">
                        <path
                            d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781 c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309 c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584 c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68 c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299 c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294 c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756 c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236 c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978 s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802 s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949 c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143 l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768 C571.098,441.238,576.197,447.968,577.83,456.128z" />
                    </svg> </a>
            </div>
        </div>
        <div class="page-wrapper" style="width: 100%; position: relative;">
            <div class="classic">
                <div class="row">
                    <div class="row-wrapper  vc_custom_1485243761347">
                        <div id="taste" class="vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                            <div class="large-6 columns">
                                <div class="vc_column-inner vc_custom_1485165641158">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="text-center page-header id_1652f7f677b806831496911 animate-text alt-h">
                                            <div style="color: #333333">
                                                <h3>Giới Thiệu</h3>
                                            </div>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f677b806831496911 .post-meta li a, .id_1652f7f677b806831496911 .post-meta { color: #333333 } .id_1652f7f677b806831496911 .link-hover:after {background:#333333}">
                                        </div>
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="" style="height: 32px"></div>
                                        </div>


                                        <div class="wpb_text_column wpb_content_element  vc_custom_1513757041814">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center;">“Mocadining” – Tiền thân của Moca Cafe 16 Phố Nhà Thờ, một nhà hàng có bề dày lịch sử với hơn 30 năm tuổi. Moca Dining mang đậm phong cách fushion, mỗi món ăn là một tác phẩm nghệ thuật ẩn chứa tâm tư, tình cảm của người đầu bếp.Đến với Moca Dining không chỉ là trải nghiệm của vị giác mà còn là đón nhận sự thư thái đến từ ngũ quan Đắm chìm trong không gian sang trọng, với lối kiến trúc hiện đại nhưng đâu đó, từ sâu thẳm trong trái tim mỗi thực khách là cảm nhận về một Hà Nội xưa trong từng góc nhỏ</p>

                                            </div>
                                        </div>
                                        <div class="text-center animate-text"><a href="/vi/gioi-thieu/"
                                                class="btn btn-sm btn-border-animate btn-dark   ">
                                                <span class="btn-text ">Giới Thiệu<span
                                                        class="top button-border"></span>
                                                    <span class="left left-bottom button-border"></span>
                                                    <span class="left left-top button-border"></span>
                                                    <span class="bottom bottom-right button-border"></span>
                                                    <span class="bottom bottom-left button-border"></span>
                                                    <span class="right button-border"></span></span>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-6 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="row row_inner">
                                            <div class="large-6 small-6 columns">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_left">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div
                                                                    class="vc_single_image-wrapper img-wrapper   vc_box_border_grey">
                                                                    <img data-vc-zoom="/mocadining.com/wp-content/uploads/2023/05/7-681x1024.jpg"
                                                                        width="2725" height="4095"
                                                                        src="/mocadining.com/wp-content/uploads/2023/05/7.jpg"
                                                                        class="vc_single_image-img attachment-full"
                                                                        alt=""
                                                                        srcset="/mocadining.com/wp-content/uploads/2023/05/7.jpg 2725w, /mocadining.com/wp-content/uploads/2023/05/7-200x300.jpg 200w, /mocadining.com/wp-content/uploads/2023/05/7-768x1154.jpg 768w, /mocadining.com/wp-content/uploads/2023/05/7-681x1024.jpg 681w"
                                                                        sizes="(max-width: 2725px) 100vw, 2725px" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-6 small-6 columns">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_left">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div
                                                                    class="vc_single_image-wrapper img-wrapper   vc_box_border_grey">
                                                                    <img data-vc-zoom="/mocadining.com/wp-content/uploads/2023/05/hp2-683x1024.jpg"
                                                                        width="3347" height="5020"
                                                                        src="/mocadining.com/wp-content/uploads/2023/05/hp2.jpg"
                                                                        class="vc_single_image-img attachment-full"
                                                                        alt=""
                                                                        srcset="/mocadining.com/wp-content/uploads/2023/05/hp2.jpg 3347w, /mocadining.com/wp-content/uploads/2023/05/hp2-200x300.jpg 200w, /mocadining.com/wp-content/uploads/2023/05/hp2-768x1152.jpg 768w /mocadining.com/wp-content/uploads/2023/05/hp2-683x1024.jpg 683w"
                                                                        sizes="(max-width: 3347px) 100vw, 3347px" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                        class="row-wrapper full-row vc_custom_1485175473981">
                        <div class="">
                            <div class="large-3 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="mosaic-item id_1652f7f677d555921330076" data-sm-height="200"
                                            data-lg-height="530">
                                            <a class="mosaic-link" href="/vi/events-2/">
                                                <div class="mosaic-img"
                                                    style="background-image: url(/mocadining.com/wp-content/uploads/2023/05/6-683x1024.jpg)">
                                                </div>
                                                <div class="mosaic-info" style="color: #ffffff">

                                                    <div class="mosaic-link">Sự kiện Đặc sắc </div>
                                                </div>
                                                <div class="mosaic-item-overlay"></div>
                                            </a>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f677d555921330076 .mosaic-item-overlay { background: -moz-linear-gradient(top, rgba(0,0,0,0.01) 0%, #111111 100%); background: -webkit-linear-gradient(top,  rgba(0,0,0,0.01) 0%,#111111 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0.01) 0%,#111111 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); }.id_1652f7f677d555921330076 .mosaic-info .mosaic-link:after { background: #ffffff; }">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-3 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="mosaic-item id_1652f7f677d8631506451520" data-sm-height="200"
                                            data-lg-height="300">
                                            <a class="mosaic-link" href="/vi/thuc-don/">
                                                <div class="mosaic-img"
                                                    style="background-image: url(/mocadining.com/wp-content/uploads/2023/05/7-681x1024.jpg)">
                                                </div>
                                                <div class="mosaic-info" style="color: #ffffff">

                                                    <div class="mosaic-link">Thực đơn trưa</div>
                                                </div>
                                                <div class="mosaic-item-overlay"></div>
                                            </a>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f677d8631506451520 .mosaic-item-overlay { background: -moz-linear-gradient(top, rgba(0,0,0,0.01) 0%, #111111 100%); background: -webkit-linear-gradient(top,  rgba(0,0,0,0.01) 0%,#111111 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0.01) 0%,#111111 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); }.id_1652f7f677d8631506451520 .mosaic-info .mosaic-link:after { background: #ffffff; }">
                                        </div>
                                        <div class="mosaic-item id_1652f7f677d8e6926373604" data-sm-height="200"
                                            data-lg-height="200">
                                            <div class="mosaic-link">
                                                <div class="mosaic-img"
                                                    style="background-image: url(/mocadining.com/wp-content/uploads/2023/05/2-1024x681.jpg)">
                                                </div>
                                                <div class="mosaic-info" style="color: #ffffff">

                                                    <div class="mosaic-link">Kiến Trúc Độc Đáo</div>
                                                </div>
                                                <div class="mosaic-item-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f677d8e6926373604 .mosaic-item-overlay { background: -moz-linear-gradient(top, rgba(0,0,0,0.01) 0%, #111111 100%); background: -webkit-linear-gradient(top,  rgba(0,0,0,0.01) 0%,#111111 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0.01) 0%,#111111 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); }.id_1652f7f677d8e6926373604 .mosaic-info .mosaic-link:after { background: #ffffff; }">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-3 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        {{-- <div class="mosaic-item id_1652f7f677dbb91477453467" data-sm-height="200"
                                            data-lg-height="200">
                                            <div class="mosaic-link">
                                                <div class="mosaic-img"
                                                    style="background-image: url(/mocadining.com/wp-content/uploads/2023/05/8-683x1024.jpg)">
                                                </div>
                                                <div class="mosaic-info" style="color: #ffffff">

                                                    <div class="mosaic-link">Cocktails cảm hứng Nhật Bản </div>
                                                </div>
                                                <div class="mosaic-item-overlay"></div>
                                            </div>
                                        </div> --}}
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f677dbb91477453467 .mosaic-item-overlay { background: -moz-linear-gradient(top, rgba(0,0,0,0.01) 0%, #111111 100%); background: -webkit-linear-gradient(top,  rgba(0,0,0,0.01) 0%,#111111 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0.01) 0%,#111111 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); }.id_1652f7f677dbb91477453467 .mosaic-info .mosaic-link:after { background: #ffffff; }">
                                        </div>
                                        <div class="mosaic-item id_1652f7f677dd4554689764" data-sm-height="200"
                                            data-lg-height="300">
                                            <a class="mosaic-link" href="/vi/thuc-don/">
                                                <div class="mosaic-img"
                                                    style="background-image: url(/mocadining.com/wp-content/uploads/2023/05/SORAE1546-copy-1024x768.jpg)">
                                                </div>
                                                <div class="mosaic-info" style="color: #ffffff">

                                                    <div class="mosaic-link">Ẩm thực sang trọng</div>
                                                </div>
                                                <div class="mosaic-item-overlay"></div>
                                            </a>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f677dd4554689764 .mosaic-item-overlay { background: -moz-linear-gradient(top, rgba(0,0,0,0.01) 0%, #111111 100%); background: -webkit-linear-gradient(top,  rgba(0,0,0,0.01) 0%,#111111 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0.01) 0%,#111111 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); }.id_1652f7f677dd4554689764 .mosaic-info .mosaic-link:after { background: #ffffff; }">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-3 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="mosaic-item id_1652f7f677e008158124957" data-sm-height="200"
                                            data-lg-height="530">
                                            <a class="mosaic-link" href="/vi/hinh-anh/">
                                                <div class="mosaic-img"
                                                    style="background-image: url(/mocadining.com/wp-content/uploads/2023/05/9-683x1024.jpg)">
                                                </div>
                                                <div class="mosaic-info" style="color: #ffffff">

                                                    <div class="mosaic-link">Phòng riêng đẳng cấp</div>
                                                </div>
                                                <div class="mosaic-item-overlay"></div>
                                            </a>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f677e008158124957 .mosaic-item-overlay { background: -moz-linear-gradient(top, rgba(0,0,0,0.01) 0%, #111111 100%); background: -webkit-linear-gradient(top,  rgba(0,0,0,0.01) 0%,#111111 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0.01) 0%,#111111 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); }.id_1652f7f677e008158124957 .mosaic-info .mosaic-link:after { background: #ffffff; }">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="row-wrapper  vc_custom_1485175494804">
                        <div class="vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                            <div class="large-6 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="row row_inner">
                                            <div class="large-6 small-6 columns">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_left">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div
                                                                    class="vc_single_image-wrapper img-wrapper   vc_box_border_grey">
                                                                    <img data-vc-zoom="/mocadining.com/wp-content/uploads/2023/05/SORAE0054-copy-767x1024.jpg"
                                                                        width="6190" height="8264"
                                                                        src="/mocadining.com/wp-content/uploads/2023/05/SORAE0054-copy.jpg"
                                                                        class="vc_single_image-img attachment-full"
                                                                        alt=""
                                                                        srcset="/mocadining.com/wp-content/uploads/2023/05/SORAE0054-copy.jpg 6190w, /mocadining.com/wp-content/uploads/2023/05/SORAE0054-copy-225x300.jpg 225w, /mocadining.com/wp-content/uploads/2023/05/SORAE0054-copy-768x1025.jpg 768w, /mocadining.com/wp-content/uploads/2023/05/SORAE0054-copy-767x1024.jpg 767w"
                                                                        sizes="(max-width: 6190px) 100vw, 6190px" />
                                                                </div>
                                                            </figure>
                                                        </div>

                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_left">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div
                                                                    class="vc_single_image-wrapper img-wrapper   vc_box_border_grey">
                                                                    <img data-vc-zoom="/mocadining.com/wp-content/uploads/2023/05/SORAE1783-copy-792x1024.jpg"
                                                                        width="5897" height="7629"
                                                                        src="/mocadining.com/wp-content/uploads/2023/05/SORAE1783-copy.jpg"
                                                                        class="vc_single_image-img attachment-full"
                                                                        alt=""
                                                                        srcset="/mocadining.com/wp-content/uploads/2023/05/SORAE1783-copy.jpg 5897w, /mocadining.com/wp-content/uploads/2023/05/SORAE1783-copy-232x300.jpg 232w, /mocadining.com/wp-content/uploads/2023/05/SORAE1783-copy-768x994.jpg 768w, /mocadining.com/wp-content/uploads/2023/05/SORAE1783-copy-792x1024.jpg 792w"
                                                                        sizes="(max-width: 5897px) 100vw, 5897px" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-6 small-6 columns">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_left">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div
                                                                    class="vc_single_image-wrapper img-wrapper   vc_box_border_grey">
                                                                    <img data-vc-zoom="/mocadining.com/wp-content/uploads/2023/05/SORAE1284-copy-768x1024.jpg"
                                                                        width="6156" height="8208"
                                                                        src="/mocadining.com/wp-content/uploads/2023/05/SORAE1284-copy.jpg"
                                                                        class="vc_single_image-img attachment-full"
                                                                        alt=""
                                                                        srcset="/mocadining.com/wp-content/uploads/2023/05/SORAE1284-copy.jpg 6156w, /mocadining.com/wp-content/uploads/2023/05/SORAE1284-copy-225x300.jpg 225w, /mocadining.com/wp-content/uploads/2023/05/SORAE1284-copy-768x1024.jpg 768w"
                                                                        sizes="(max-width: 6156px) 100vw, 6156px" />
                                                                </div>
                                                            </figure>
                                                        </div>

                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_left">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div
                                                                    class="vc_single_image-wrapper img-wrapper   vc_box_border_grey">
                                                                    <img data-vc-zoom="/mocadining.com/wp-content/uploads/2023/05/5-768x1024.jpg"
                                                                        width="6192" height="8256"
                                                                        src="/mocadining.com/wp-content/uploads/2023/05/5.jpg"
                                                                        class="vc_single_image-img attachment-full"
                                                                        alt=""
                                                                        srcset="/mocadining.com/wp-content/uploads/2023/05/5.jpg 6192w, /mocadining.com/wp-content/uploads/2023/05/5-225x300.jpg 225w, /mocadining.com/wp-content/uploads/2023/05/5-768x1024.jpg 768w"
                                                                        sizes="(max-width: 6192px) 100vw, 6192px" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-6 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="text-center page-header id_1652f7f6780249132971084 animate-text alt-h">
                                            <div style="color: #333333">
                                                <h3>Thực Đơn</h3>
                                            </div>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f6780249132971084 .post-meta li a, .id_1652f7f6780249132971084 .post-meta { color: #333333 } .id_1652f7f6780249132971084 .link-hover:after {background:#333333}">
                                        </div>
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="" style="height: 32px"></div>
                                        </div>


                                        <div class="wpb_text_column wpb_content_element  vc_custom_1533295759108">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center;">“Mocadining” – Tiền thân của Moca Cafe 16 Phố Nhà Thờ, một nhà hàng có bề dày lịch sử với hơn 30 năm tuổi. Moca Dining mang đậm phong cách fushion, mỗi món ăn là một tác phẩm nghệ thuật ẩn chứa tâm tư, tình cảm của người đầu bếp.Đến với Moca Dining không chỉ là trải nghiệm của vị giác mà còn là đón nhận sự thư thái đến từ ngũ quan Đắm chìm trong không gian sang trọng, với lối kiến trúc hiện đại nhưng đâu đó, từ sâu thẳm trong trái tim mỗi thực khách là cảm nhận về một Hà Nội xưa trong từng góc nhỏ.</p>

                                            </div>
                                        </div>
                                        <div class="text-center animate-text"><a
                                                href="/vi/thuc-don/"
                                                class="btn btn-sm btn-border-animate btn-dark   ">
                                                <span class="btn-text ">Xem Thực Đơn<span
                                                        class="top button-border"></span>
                                                    <span class="left left-bottom button-border"></span>
                                                    <span class="left left-top button-border"></span>
                                                    <span class="bottom bottom-right button-border"></span>
                                                    <span class="bottom bottom-left button-border"></span>
                                                    <span class="right button-border"></span></span>
                                            </a></div>
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="show-for-large" style="height: 0px"></div>
                                            <div class="hide-for-large" style="height: 62px"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="row-wrapper full-row ">
                        <div data-marco-parallax="0.5"
                            style="background-image: url(/mocadining.com/wp-content/uploads/2017/02/Sakura-Room-1920x1080.jpg)"
                            class="marco-parallax">
                            <div class="row-image-overlay" style="background-color: rgba(0,0,0,0.58)"></div>
                        </div>
                        <div class="">
                            <div class="large-12 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="" style="height: 200px"></div>
                                        </div>

                                        <div
                                            class="text-center page-header id_1652f7f6780b661128553370 animate-text alt-h">
                                            <div style="color: #ffffff">
                                                <h2>Chúng tôi kiên định lắng nghe để phục vụ. Sự hài lòng của bạn là điều cốt yếu nuôi dưỡng tâm hổn và cuộc sống của chúng tôi. Trong vòng xoáy của hiệu lệnh phục vụ, chúng tôi ưu tiên rõ ràng theo thứ tự sau:

                                                   <p> 1. Thực Khách - bạn là nguồn cảm hứng và mục tiêu phục vụ của chúng tôi.</p>

                                                   <p>  2. Chủ Quán - chúng tôi tôn trọng và phục vụ theo định hướng của người sáng lập và duy trì không gian này trong suốt 30 năm qua.</p>

                                                   <p> 3. Quản Lý - chúng tôi tuân thủ và thực hiện theo sự chỉ đạo của người điều hành trực tiếp tại nhà hàng Moca.</p>

                                                    Và sau đó, "Bất hữu lệnh" - chúng tôi lựa chọn không lắng nghe hay phản hồi đối với các yếu tố ngoài ba ưu tiên trên, đảm bảo tập trung tuyệt đối vào việc phục vụ bạn với chất luợng cao nhất.</h2>
                                            </div>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f6780b661128553370 .post-meta li a, .id_1652f7f6780b661128553370 .post-meta { color: #ffffff } .id_1652f7f6780b661128553370 .link-hover:after {background:#ffffff}">
                                        </div>
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="" style="height: 200px"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="row-wrapper  ">
                        <div class="">
                            <div class="large-12 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="show-for-large" style="height: 100px"></div>
                                            <div class="hide-for-large" style="height: 62px"></div>
                                        </div>

                                        <div
                                            class="text-center page-header id_1652f7f678118d331102343 animate-text alt-h">
                                            <div style="color: #333333">
                                                <h2>Đặt Bàn</h2>
                                                <p>Mocadining rất hân hạnh khi được phục vụ quý vị thực khách, và là nơi lưu
                                                    trữ những khoảnh khắc tuyệt vời của từng người.</p>
                                            </div>
                                        </div>
                                        <div class="custom-styles"
                                            data-styles=".id_1652f7f678118d331102343 .post-meta li a, .id_1652f7f678118d331102343 .post-meta { color: #333333 } .id_1652f7f678118d331102343 .link-hover:after {background:#333333}">
                                        </div>
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="" style="height: 50px"></div>
                                        </div>

                                        <div class="row row_inner">
                                            <div class="large-12 columns">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        {{-- <div class="text-center animate-text"><a
                                                                href="https://d1-concepts.com/dat-ban/"
                                                                class="btn btn-sm btn-border-animate btn-dark   ">
                                                                <span class="btn-text ">Đặt bàn<span
                                                                        class="top button-border"></span>
                                                                    <span
                                                                        class="left left-bottom button-border"></span>
                                                                    <span class="left left-top button-border"></span>
                                                                    <span
                                                                        class="bottom bottom-right button-border"></span>
                                                                    <span
                                                                        class="bottom bottom-left button-border"></span>
                                                                    <span class="right button-border"></span></span>
                                                            </a></div> --}}
                                                        <div class="vc_empty_space">
                                                            <span class="vc_empty_space_inner"></span>
                                                            <div class="" style="height: 50px"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- / --}}


    {{-- footer --}}
    <div class="footer">
        <aside class="row footer-grid animate-text">
            <div class="small-12 large-4 columns">
                <div class="footer-content footer-widget-1">
                    <section id="text-16" class="widget widget_text">
                        <h6 class="widget-title"><span>Mocadining</span></h6>
                        <div class="textwidget">
                            <p>Số 14-16 Phố Nhà Thờ, Phường Hàng Trống, Quận Hoàn Kiếm, Hà Nội</p>
                            <ul>
                                <li><a href="https://www.facebook.com/Mocadining"><img
                                            src="https://sanfulou.com/wp-content/uploads/2018/01/facebook-logo-button.png"
                                            width="50" /></a></li>
                                <li><a href="/mocadining.com/wp-content/uploads/2023/03/sorae.jpg"
                                        target="_blank" rel="noopener"><img class="alignnone"
                                            src="https://sanfulou.com/wp-content/uploads/2018/01/instagram-logo.png"
                                            alt="" width="50" height="256" /></a></li>
                                <li>
                                    {{-- <a href="https://www.tripadvisor.com.vn/Restaurant_Review-g293925-d7152997-Reviews-Sorae_Restaurant_Lounge-Ho_Chi_Minh_City.html"
                                        target="_blank" rel="noopener"><img
                                            src="https://sanfulou.com/wp-content/uploads/2018/01/tripadvisor-logotype.png"
                                            width="50" /></a> --}}
                                        </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="small-12 large-4 columns">
                <div class="footer-content footer-widget-2">
                    <section id="text-17" class="widget widget_text">
                        <h6 class="widget-title"><span>Đặt bàn</span></h6>
                        <div class="textwidget">
                            <p>Hotline: 0819961997</p>
                            <p>Opening hours:</p>
                            <p>Lunch: 11:00 &#8211; 14:00<br /> Dinner: 17:00 &#8211; 23:00</p>
                        </div>
                    </section>
                    <section id="text-19" class="widget widget_text">
                        <h6 class="widget-title"><span>Chăm sóc khách hàng</span></h6>
                        <div class="textwidget">
                            <p>Hotline: 0819961997</p>
                            <p>Email: mocadining@gmail.com</p>
                            <p>&nbsp;</p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="small-12 large-4 columns">
                <div class="footer-content footer-widget-3">
                    <section id="text-21" class="widget widget_text">
                        <h6 class="widget-title"><span>Bản Tin</span></h6>
                        <div class="textwidget">
                            <div role="form" class="wpcf7" id="wpcf7-f1133-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="/vi/home-alt/#wpcf7-f1133-o1" method="post"
                                    class="wpcf7-form mailchimp-ext-0.5.08" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="1133" /><br />
                                        <input type="hidden" name="_wpcf7_version" value="4.9.2" /><br />
                                        <input type="hidden" name="_wpcf7_locale" value="vi" /><br />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1133-o1" /><br />
                                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    </div>
                                    <div class="sorea-newsletter">
                                        Sign up for incentives from Mocadining.</p>
                                        <div><span class="wpcf7-form-control-wrap Name"><input type="text"
                                                    name="Name" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                    placeholder="Name" /></span></div>
                                        <div><span class="wpcf7-form-control-wrap Email"><input type="email"
                                                    name="Email" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Email" /></span></div>
                                        <div><input type="submit" value="Send"
                                                class="wpcf7-form-control wpcf7-submit" /></div>
                                    </div>
                                    <p><input type='hidden' class='wpcf7-pum'
                                            value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}' />
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    <p style="display: none !important"><span
                                            class="wpcf7-form-control-wrap referer-page"><input type="hidden"
                                                name="referer-page" value="direct visit"
                                                class="wpcf7-form-control wpcf7-text referer-page"
                                                aria-invalid="false"></span></p>
                                    <p>
                                        <!-- Chimpmail extension by Renzo Johnson -->
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="small-12 large-3 columns">
                <div class="footer-content footer-widget-4">
                    <div class="btn btn-border-animate" id="scroll-up">
                        <svg xmlns="http://www.w3.org/2000/svg" class="arrow-svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="40px"
                            viewBox="0 0 50 100" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable">
                            <line class="arrow-svg-top" stroke="#171717" x1="15" y1="25"
                                x2="25" y2="15"
                                style="stroke-width: 1px; vector-effect: non-scaling-stroke; fill: none;" />
                            <line class="arrow-svg-top" stroke="#171717" x1="25" y1="15"
                                x2="35" y2="25"
                                style="stroke-width: 1px; vector-effect: non-scaling-stroke; fill: none;" />
                            <line class="arrow-svg-ver" stroke="#171717"
                                style="stroke-width: 1px; vector-effect: non-scaling-stroke; fill: none;"
                                shape-rendering="crispEdges" x1="25" y1="15" x2="25"
                                y2="85" />
                        </svg> <span class="top button-border"></span>
                        <span class="left left-bottom button-border"></span>
                        <span class="left left-top button-border"></span>
                        <span class="bottom bottom-right button-border"></span>
                        <span class="bottom bottom-left button-border"></span>
                        <span class="right button-border"></span>
                    </div>
                </div>
            </div>
        </aside>
        <div class="footer_bottom">
            <div class="footer2">
                <div class="content_left">
                    <a href="#" target="_blank" rel="noopener"> <img src="/mocadining.com/wp-content/uploads/2023/03/MOCADINING.png" alt=""></a>
                    <br>
                    <br>Công Ty THNH Bình Lý<br> Số 14-16 Phố Nhà Thờ, Phường Hàng Trống, Quận Hoàn Kiếm, Hà Nội<br> Hotline : 081 996 1997 <br>
                    </a>
                </div>
                <div class="content_right">
                    {{-- <a href="https://nhahangdimai.com/" target="_blank"><img
                            src="/mocadining.com/wp-content/uploads/2018/02/logodimai.png" /></a> --}}
                    {{-- <a href="/" target="_blank"> <img src="/mocadining.com/wp-content/uploads/2023/03/MOCADINING.png" alt=""></a> --}}
                    {{-- <a href="https://sanfulou.com/" target="_blank"><img
                            style="padding-left: 17px; width: 140px; position: relative; top: 45px;"
                            src="/mocadining.com/wp-content/uploads/2018/02/logosanfulou.png" /></a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- / --}}

    {{-- <div class="fixed_booking">
        <a href="https://d1-concepts.com/dat-ban/">Đặt Bàn</a>
    </div> --}}
    {{-- <script type='text/javascript'
        src='/mocadining.com/wp-content/themes/marco/assets/js/jquery.datetimepicker.full.min.js'></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".post-btn-more:lang(vi) a:contains('Read more')").html("Xem thêm");
            jQuery('body').on('click', '.contact-review .wpcf7-list-item', function(event) {
                event.preventDefault();
                jQuery('.contact-review .wpcf7-list-item').removeClass('selected');
                jQuery(this).addClass('selected');
                jQuery('.contact-review .wpcf7-list-item input').attr('checked', false);
                jQuery(this).find('input').attr('checked', true);
            });
            var start;
            var blockdate = [
                '25/1/2020',
                '26/1/2020',
                '27/1/2020'
            ];
            var starttime, endtime;
            var hourlist
            var hourlist1, hourlist2;
            var today = new Date();
            hourlist1 = get_list_hour("11:30", "14:00");
            hourlist2 = get_list_hour("17:30", "22:00");
            if ((today.getHours() + 2) * 60 + today.getMinutes() > 23 * 60) {
                var tomorrow = new Date();
                start = tomorrow.setDate(today.getDate() + 1);
            } else {
                start = Date.now();
            }
            jQuery('#Datebook').datetimepicker({
                timepicker: false,
                minDate: start,
                format: 'd.m.Y',
                onSelectDate: function(ct, $i) {
                    var block_date_check = false;
                    var dataselect = ct.getDate() + '/' + (ct.getMonth() + 1) + '/' + ct.getFullYear();
                    jQuery('#Timebook').val('');
                    var select_day = ct.getDate() + '/' + (ct.getMonth() + 1) + '/' + ct.getFullYear();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1; //January is 0!

                    var yyyy = today.getFullYear();
                    var today_result = dd + '/' + mm + '/' + yyyy;
                    console.log(select_day + ' - ' + today_result);
                    var hours = [];
                    if (select_day == today_result) {
                        var hour = today.getHours() + 2;
                        if (today.getMinutes() < 30) {
                            starttime = (today.getHours() + 2) + ':30';
                        } else if (today.getMinutes() == 30) {
                            starttime = (today.getHours() + 3) + ':00';
                        } else {
                            starttime = (today.getHours() + 3) + ':30';
                        }
                        if (hourlist1.indexOf(starttime) > -1) {
                            endtime = '13:00';
                            hours = get_list_hour(starttime, '13:00').concat(hourlist2);
                        } else {
                            endtime = '22:00';
                            hours = get_list_hour(starttime, "22:00");
                        }
                        console.log(starttime);
                        setTimeout(function() {
                            jQuery('#Timebook').datetimepicker({
                                datepicker: false,
                                format: 'H:i',
                                allowTimes: hours
                            });
                        }, 500);
                    } else {
                        hours = hourlist1.concat(hourlist2);
                        jQuery('#Timebook').datetimepicker({
                            datepicker: false,
                            format: 'H:i',
                            allowTimes: hours
                        });
                    }
                    setTimeout(function() {
                        jQuery(blockdate).each(function(index, el) {
                            if (dataselect == el) {
                                if (jQuery('html').attr('lang') == 'vi') {
                                    alert(
                                        'Quý khách vui lòng đặt bàn trực tiếp qua điện thoại nhà hàng vào các ngày lễ'
                                    );
                                    jQuery('#DateId').val('');
                                    jQuery('#TimeId').val('');
                                } else {
                                    alert(
                                        'Please reserve your table via restaurant telephone!'
                                    );
                                    jQuery('#DateId').val('');
                                    jQuery('#TimeId').val('');
                                }
                            }
                        });
                    }, 1000);
                }
            });

            jQuery('.wpcf7-submit').click(function() {
                jQuery(this).attr('disabled', true);
                jQuery(this).submit();
            });
            document.addEventListener('wpcf7invalid', function() {
                jQuery('.wpcf7-submit').attr('disabled', false);
            }, false);

            var wpcf7Elm = document.querySelector('.wpcf7-form');
            wpcf7Elm.addEventListener('wpcf7mailsent', function(event) {
                $('.submit-success').fadeIn();
                setTimeout(function() {
                    $('.submit-success').fadeOut();
                }, 5000);
            }, false);

        });

        function get_list_hour(start, end) {
            var x = 30; //minutes interval
            var times = []; // time array
            var starttime = start.split(':');
            starthour = parseInt(starttime[0], 10);
            startminute = parseInt(starttime[1], 10);
            var endtime = end.split(':');
            endhour = parseInt(endtime[0], 10);
            endminute = parseInt(endtime[1], 10);
            var start_tt = starthour * 60 + startminute;
            var end_tt = endhour * 60 + endminute + 30;
            tt = start_tt;
            console.log(end_tt);

            //loop to increment the time and push results in array
            for (var i = 0; tt < end_tt; i++) {
                var hh = Math.floor(tt / 60); // getting hours of day in 0-24 format
                var mm = (tt % 60); // getting minutes of the hour in 0-55 format
                times[i] = ("0" + (hh % 24)).slice(-2) + ':' + ("0" + mm).slice(-
                    2); // pushing data in array in [00:00 - 12:00 AM/PM format]
                tt = tt + x;
            }
            return times;
        }
    </script> --}}

    <!-- Facebook Pixel Event Code -->
    {{-- <script>
        document.addEventListener(
            'wpcf7submit',
            function(event) {
                fbq('track', 'Lead', {
                    "fb_integration_tracking": "contact-form-7"
                });
            },
            false
        );
    </script> --}}
    <!-- End Facebook Pixel Event Code -->
    {{-- <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/www.soraesushi.com\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "recaptcha": {
                "messages": {
                    "empty": "H\u00e3y x\u00e1c nh\u1eadn r\u1eb1ng b\u1ea1n kh\u00f4ng ph\u1ea3i l\u00e0 robot."
                }
            }
        };
    </script> --}}
    {{-- <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/plugins/contact-form-7/includes/js/scripts.js') }}'></script> --}}
    {{-- <script type='text/javascript'>
            var ajaxurl = '/mocadining.com/wp-admin/admin-ajax.php';
            var pageId = '661';
        </script> --}}
    <script type='text/javascript' src='{{ asset('/mocadining.com/wp-content/themes/marco/assets/js/libs.js') }}'></script>
    <script type='text/javascript' src='{{ asset('/mocadining.com/wp-content/themes/marco/assets/js/app.js') }}'></script>
    {{-- <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/themes/marco/assets/js/jquery.datetimepicker.full.min.js') }}'></script> --}}
    {{-- <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/plugins/marco-theme-plugin/js/scripts.min.js') }}'></script> --}}
    {{-- <script type='text/javascript' src='{{ asset('/mocadining.com/wp-includes/js/wp-embed.min.js') }}'></script> --}}
    {{-- <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js') }}'>
    </script> --}}
    {{-- <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/plugins/js_composer/assets/lib/bower/zoom/jquery.zoom.min.js') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('/mocadining.com/wp-content/plugins/js_composer/assets/lib/vc_image_zoom/vc_image_zoom.min.js') }}'>
    </script> --}}
</body>

</html>
