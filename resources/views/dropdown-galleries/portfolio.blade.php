@extends('layouts.master')

@section('container')
    <div id="container">
        <div id="portfolio">
            <ul id="filterable">
                <li class="first">
                    <h5>Sort by:</h5>
                </li>
                <li class="current"><a class="all" href="#all">All</a></li>
                <li><a class="web" href="#web">Webdesign</a></li>
                <li><a class="logos" href="#logos">Logo</a></li>
                <li><a class="branding" href="#branding">Branding</a></li>
                <li><a class="video" href="#video">Video</a></li>
            </ul>
            <!--END filtering-nav-->
            <div class="portfolio-container" id="columns">
                <ul>
                    <li class="one-fourth web">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto" title="Scream"><img src="assets/img/portfolio/portfolio-img-01.jpg"
                                    alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Worpdress Design</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth logos">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Logo Design</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth video">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Watch Video</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth web">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Wordpress Master</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth logos">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Endless Logo Design</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth web">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Worpdress Widgets</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth web">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Magento Development</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth web">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Joomla Shopping</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth branding">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">T-Shirts Designs</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth video">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Youtube Video</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth branding">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Brand Everything</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                    <li class="one-fourth video">
                        <p> <a title="Caption Text" href="assets/img/demo/slide_2.jpg" class="portfolio-item-preview"
                                data-rel="prettyPhoto"><img src="assets/img/portfolio/portfolio-img-01.jpg" alt=""
                                    width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                        <h4><a href="#">Another Video</a></h4>
                        <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
                    </li>
                </ul>
                <!--END ul-->
            </div>
            <!--END portfolio-wrap-->
        </div>
        <div style="clear:both; height: 40px"></div>
    </div>
    <!-- close container -->
@endsection
