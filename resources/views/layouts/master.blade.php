<!DOCTYPE HTML>

<head>
    <title>Bigshot | {{ $title }}</title>
    <meta charset="utf-8">
    <!-- Main CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/menu/css/simple_menu.css">

    {{-- CSS --}}
    @if ($title == 'Index')
        <link rel="stylesheet" href="assets/css/header-index.css">
    @elseif ($title == 'EI Slider')
        <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/boxes/css/style5.css">
        <link rel="stylesheet" href="assets/css/body-ei-slider.css" type="text/css">
    @elseif ($title == 'Fullscreen Gallery')
        <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen">
        <link rel="stylesheet" href="assets/css/supersized.css" type="text/css" media="screen">
        <link rel="stylesheet" href="assets/theme/supersized.shutter.css" type="text/css" media="screen">
        <!-- Google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic'
            rel='stylesheet' type='text/css' />
    @elseif ($title == 'Image Frontpage' || $title == 'Gallery Fader')
        <link rel="stylesheet" type="text/css" href="assets/css/gridNavigation.css">
    @elseif ($title == 'Blog')
        <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/boxes/css/style6.css">
    @else
        {{-- Ini adalah class dengan title Nivo,Magazine,Full width, Columns, Elements, Portfolio, Video, Contact --}}
        <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen">
    @endif
    {{-- End CSS --}}

</head>

<body>
    {{-- Start Header --}}
    @if ($title == 'Index')
        @include('partials.header-index')
    @elseif ($title == 'Fullscreen Gallery')
        @include('partials.header-fullscreen')
    @else
        @include('partials.header')
    @endif
    {{-- End Header --}}

    <div>
        @yield('container')
    </div>

    {{-- Start Footer --}}
    @if ($title == 'Fullscreen Gallery')
        {{-- Nothing --}}
    @else
        @include('partials.footer')
    @endif
    {{-- End Footer --}}
</body>

@if ($title == 'Index')
    <!--JS FILES -->
    <script src="assets/js/jquery.tools.min.js"></script>
    <script>
        $(function() {
            $("#prod_nav ul").tabs("#panes > div", {
                effect: 'fade',
                fadeOutSpeed: 400
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".pane-list li").click(function() {
                window.location = $(this).find("a").attr("href");
                return false;
            });
        });
    </script>
    {{-- @elseif ($title == 'Nivo' || $title == 'Magazine' || $title == 'Blog' || $title == 'Full Width' || $title == 'Columns' || $title == 'Elements' || $title == 'Portfolio' || $title == 'Video' || $title == 'Contact')
    <!-- JS Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/slides/slides.min.jquery.js"></script>
    <script src="assets/js/cycle-slider/cycle.js"></script>
    <script src="assets/js/nivo-slider/jquery.nivo.slider.js"></script>
    <script src="assets/js/tabify/jquery.tabify.js"></script>
    <script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script src="assets/js/twitter/jquery.tweet.js"></script>
    <script src="assets/js/scrolltop/scrolltopcontrol.js"></script>
    <script src="assets/js/portfolio/filterable.js"></script>
    <script src="assets/js/modernizr/modernizr-2.0.3.js"></script>
    <script src="assets/js/easing/jquery.easing.1.3.js"></script>
    <script src="assets/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
    <script src="assets/js/swfobject/swfobject.js"></script>

    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox.css" media="all">
    <script src="assets/js/fancybox/jquery.fancybox-1.2.1.js"></script> --}}
@elseif ($title == 'EI Slider')
    <!-- JS Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.eislideshow.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        jQuery.noConflict()(function($) {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 3000,
                titlesFactor: 0
            });
        });
    </script>
    <script src="assets/js/slides/slides.min.jquery.js"></script>
    <script src="assets/js/cycle-slider/cycle.js"></script>
    <script src="assets/js/nivo-slider/jquery.nivo.slider.js"></script>
    <script src="assets/js/tabify/jquery.tabify.js"></script>
    <script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script src="assets/js/twitter/jquery.tweet.js"></script>
    <script src="assets/js/scrolltop/scrolltopcontrol.js"></script>
    <script src="assets/js/portfolio/filterable.js"></script>
    <script src="assets/js/modernizr/modernizr-2.0.3.js"></script>
    <script src="assets/js/easing/jquery.easing.1.3.js"></script>
    <script src="assets/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
    <script src="assets/js/swfobject/swfobject.js"></script>

    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox.css" media="all">
    <script src="assets/js/fancybox/jquery.fancybox-1.2.1.js"></script>
@elseif ($title == 'Fullscreen Gallery')
    <!--JS FILES STARTS-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/easing/jquery.easing.1.3.js"></script>
    <script src="assets/js/supersized.3.2.6.min.js"></script>
    <script src="assets/theme/supersized.shutter.min.js"></script>
    <script>
        // Super Sized
        jQuery.noConflict()(function($) {
            $.supersized({
                // Functionality
                slide_interval: 3000, // Length between transitions
                transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                transition_speed: 700, // Speed of transition
                // Components							
                slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                slides:
                    // Slideshow Images
                    [{
                        image: 'assets/img/demo/full1.jpg',
                        title: 'Copyright: Dieter Schneider',
                        thumb: 'slideshow/slide_1.jpg',
                        url: '#'
                    }, {
                        image: 'assets/img/demo/full2.jpg',
                        title: 'Copyright: Dieter Schneider',
                        thumb: 'slideshow/slide_2.jpg',
                        url: '#'
                    }, {
                        image: 'assets/img/demo/full3.jpg',
                        title: 'Copyright: Dieter Schneider',
                        thumb: 'slideshow/slide_3.jpg',
                        url: '#'
                    }]
            });
        });
    </script>
@elseif ($title == 'Gallery Fader' || $title == 'Photogrid')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.mousewheel.js"></script>
    <script src="assets/js/jquery.gridnav.js"></script>
    <script src="assets/js/easing/jquery.easing.1.3.js"></script>
    <script>
        $(function() {
            $('#tj_container').gridnav({
                type: {
                    mode: 'seqfade', // use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
                    speed: 500, // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                    easing: '', // for fade, seqfade, updown, sequpdown, showhide, disperse, rows	
                    factor: 100, // for seqfade, sequpdown, rows
                    reverse: '' // for sequpdown
                }
            });
        });
    </script>
@else
    <!-- JS Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/slides/slides.min.jquery.js"></script>
    <script src="assets/js/cycle-slider/cycle.js"></script>
    <script src="assets/js/nivo-slider/jquery.nivo.slider.js"></script>
    <script src="assets/js/tabify/jquery.tabify.js"></script>
    <script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script src="assets/js/twitter/jquery.tweet.js"></script>
    <script src="assets/js/scrolltop/scrolltopcontrol.js"></script>
    <script src="assets/js/portfolio/filterable.js"></script>
    <script src="assets/js/modernizr/modernizr-2.0.3.js"></script>
    <script src="assets/js/easing/jquery.easing.1.3.js"></script>
    <script src="assets/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
    <script src="assets/js/swfobject/swfobject.js"></script>

    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox.css" media="all">
    <script src="assets/js/fancybox/jquery.fancybox-1.2.1.js"></script>
@endif
