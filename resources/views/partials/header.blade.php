<div class="header">
    <!-- Logo/Title -->
    <div id="site_title"><a href="{{ route('index') }}"> <img src="assets/img/logo.png" alt=""></a> </div>
    <!-- Main Menu -->
    <ol id="menu">
        <li><a href="{{ route('index') }}">Home</a>
            <!-- sub menu -->
            <ol>
                <li><a href="{{ route('nivo') }}">Nivo Slider</a></li>
                <li><a href="{{ route('slider') }}">EI Slider</a></li>
                <li><a href="{{ route('fullscreen') }}">Fullscreen Slider</a></li>
                <li><a href="{{ route('image-frontpage') }}">Static Image</a></li>
            </ol>
        </li>
        <!-- end sub menu -->
        <li><a href="#">Pages</a>
            <!-- sub menu -->
            <ol>
                <li><a href="{{ route('magazine') }}">Magazine</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('full-width') }}">Full Width Page</a></li>
                <li><a href="{{ route('columns') }}">Columns</a></li>
            </ol>
        </li>
        <!-- end sub menu -->
        <li><a href="{{ route('elements') }}">Elements</a></li>
        <li><a href="#">Galleries</a>
            <!-- sub menu -->
            <ol>
                <li><a href="{{ route('gallery-simple') }}">Simple</a></li>
                <li><a href="{{ route('portfolio') }}">Filterable</a></li>
                <li><a href="{{ route('gallery-fader') }}">Fade Scroll</a></li>
                <li><a href="{{ route('video') }}">Video</a></li>
                <li class="last"><a href="{{ route('photogrid') }}">PhotoGrid</a></li>
            </ol>
        </li>
        <!-- end sub menu -->
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ol>
</div>
<!-- END header -->
