@extends('layouts.master')

@section('container')
    <div class="w">
        <div id="ei-slider" class="ei-slider">
            <ul class="ei-slider-large">
                <li> <img src="assets/img/large/1.jpg" alt="">
                    <div class="ei-title">
                        <h2>Professional</h2>
                        <h3>Lightning Equipment</h3>
                    </div>
                </li>
                <li> <img src="assets/img/large/2.jpg" alt="">
                    <div class="ei-title">
                        <h2>Passionate</h2>
                        <h3>Ballerina</h3>
                    </div>
                </li>
                <li> <img src="assets/img/large/3.jpg" alt="">
                    <div class="ei-title">
                        <h2>Tranquility</h2>
                        <h3>in red</h3>
                    </div>
                </li>
                <li> <img src="assets/img/large/4.jpg" alt="">
                    <div class="ei-title">
                        <h2>Vintage</h2>
                        <h3>Beauty</h3>
                    </div>
                </li>
                <li> <img src="assets/img/large/5.jpg" alt="">
                    <div class="ei-title">
                        <h2>Mystery</h2>
                        <h3>Woman</h3>
                    </div>
                </li>
                <li> <img src="assets/img/large/6.jpg" alt="">
                    <div class="ei-title">
                        <h2>In the</h2>
                        <h3>Spotlight</h3>
                    </div>
                </li>
                <li> <img src="assets/img/large/7.jpg" alt="">
                    <div class="ei-title">
                        <h2>A touch of</h2>
                        <h3>Fashion</h3>
                    </div>
                </li>
            </ul>
            <!-- ei-slider-large -->
            <ul class="ei-slider-thumbs">
                <li class="ei-slider-element">Current</li>
                <li><a href="#">Slide 1</a><img src="assets/img/thumbs/1.jpg" alt=""></li>
                <li><a href="#">Slide 2</a><img src="assets/img/thumbs/2.jpg" alt=""></li>
                <li><a href="#">Slide 3</a><img src="assets/img/thumbs/3.jpg" alt=""></li>
                <li><a href="#">Slide 4</a><img src="assets/img/thumbs/4.jpg" alt=""></li>
                <li><a href="#">Slide 5</a><img src="assets/img/thumbs/5.jpg" alt=""></li>
                <li><a href="#">Slide 6</a><img src="assets/img/thumbs/6.jpg" alt=""></li>
                <li><a href="#">Slide 7</a><img src="assets/img/thumbs/7.jpg" alt=""></li>
            </ul>
            <!-- ei-slider-thumbs -->
        </div>
        <!-- ei-slider -->
    </div>
    <!-- wrapper -->
    <div id="container">
        <ul class="ca-menu" style="margin: 40px 0">
            <li> <a href="#"> <span class="ca-icon">A</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Exceptional Service</h2>
                        <h3 class="ca-sub">Personalized to your needs</h3>
                    </div>
                </a> </li>
            <li> <a href="#"> <span class="ca-icon">I</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Creative Storytelling</h2>
                        <h3 class="ca-sub">Advanced use of technology</h3>
                    </div>
                </a> </li>
            <li> <a href="#"> <span class="ca-icon">C</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Infographical Education</h2>
                        <h3 class="ca-sub">Understanding visually</h3>
                    </div>
                </a> </li>
            <li> <a href="#"> <span class="ca-icon">S</span>
                    <div class="ca-content">
                        <h2 class="ca-main">Sophisticated Team</h2>
                        <h3 class="ca-sub">Professionals in action</h3>
                    </div>
                </a> </li>
        </ul>
        <div style="clear:both; height: 40px"></div>
        <div class="box_highlight">
            <h1
                style="font-size:28px; letter-spacing: 16px; padding-top: 20px; text-align:center; text-transform: uppercase; color: #a7a7a7">
                The beauty of simplicity</h1>
        </div>
        <div style="clear:both; height: 40px"></div>
    </div>
    <!-- END container -->
@endsection
