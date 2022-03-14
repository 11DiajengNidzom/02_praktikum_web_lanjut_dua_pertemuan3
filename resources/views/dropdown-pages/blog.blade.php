@extends('layouts.master')

@section('container')
    <div id="container">
        <div class="two-third">
            <div id="slider3" class="nivoSlider" style="width: 630px; height: 280px">
                <a href="#">
                    <img title="Heading Here" src="assets/img/demo/slide_11.jpg" alt="" width="630" height="280">
                </a>
                <img src="assets/img/demo/slide_21.jpg" alt="" width="630" height="280">
                <img src="assets/img/demo/slide_31.jpg" alt="" width="630" height="280">
            </div>
            <div style="clear:both"></div>
            <div class="one-third">
                <h2>Photoshoot in Paris</h2>
                <img src="assets/img/frontpage_thumb2.jpg" alt="">
                <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Tempore percussus ait est amet
                    consensit cellula rei civibus in modo ad nomine.</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
            <div class="one-third last">
                <h2>Studio Photography</h2>
                <img src="assets/img/frontpage_thumb3.jpg" alt="">
                <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Tempore percussus ait est amet
                    consensit cellula rei civibus in modo ad nomine.</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
            <div class="one-third">
                <h2>Lorem Ipsum</h2>
                <img src="assets/img/frontpage_thumb4.jpg" alt="">
                <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Tempore percussus ait est amet
                    consensit cellula rei civibus in modo ad nomine.</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
            <div class="one-third last">
                <h2>Tempore Amet</h2>
                <img src="assets/img/frontpage_thumb1.jpg" alt="">
                <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Tempore percussus ait est amet
                    consensit cellula rei civibus in modo ad nomine.</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
        </div>
        <!-- close two third -->
        <div class="sidebar_right">
            <ul id="tabify_menu" class="menu_tab" style="margin: 0;">
                <li class="active"><a href="#fane1">Articles</a></li>
                <li><a href="#fane2">Reviews</a></li>
                <li><a href="#fane3">Comments</a></li>
            </ul>
            <div id="fane1" class="tab_content">
                <div class="tab_article"> <img src="assets/img/thumb1.jpg" alt="">
                    <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus
                        tui.</p>
                </div>
                <div class="tab_article"> <img src="assets/img/thumb2.jpg" alt="">
                    <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus
                        tui.</p>
                </div>
                <div class="tab_article"> <img src="assets/img/thumb3.jpg" alt="">
                    <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus
                        tui.</p>
                </div>
            </div>
            <div id="fane2" class="tab_content">
                <h3>Tab 2</h3>
                <p>Content 2</p>
            </div>
            <div id="fane3" class="tab_content">
                <h3>Tab 3</h3>
                <p>Content 3</p>
            </div>
            <div style="clear:both"></div>
            <h3>Sponsors</h3>
            <img src="assets/img/demo_ad.png" alt="">
            <h3>Sidebar Menu</h3>
            <ul class="sidebar_menu" style="margin:0">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Perquiramus Atque</a></li>
                <li><a href="#">Consensit Cellula</a></li>
                <li><a href="#">Another Link</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Perquiramus Atque</a></li>
            </ul>
        </div>
        <!-- end sidebar right -->
        <div style="clear:both; height: 40px"></div>
        <h2>This is what we do best</h2>
        <ul class="ca-menu" style="margin:0">
            <li> <a href="#"> <span class="ca-icon">F</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Exceptional <br>
                            Service</h2>
                        <h3 class="ca-sub">Personalized to your needs</h3>
                    </div>
                </a> </li>
            <li> <a href="#"> <span class="ca-icon">H</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Creative <br>
                            Storytelling</h2>
                        <h3 class="ca-sub">Advanced use of technology</h3>
                    </div>
                </a> </li>
            <li> <a href="#"> <span class="ca-icon">N</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Infographical <br>
                            Education</h2>
                        <h3 class="ca-sub">Understanding visually</h3>
                    </div>
                </a> </li>
            <li> <a href="#"> <span class="ca-icon">K</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Sophisticated <br>
                            Team</h2>
                        <h3 class="ca-sub">Professionals in action</h3>
                    </div>
                </a> </li>
        </ul>
        <div style="clear:both; height: 40px"></div>
    </div>
    <!-- end container -->
@endsection
