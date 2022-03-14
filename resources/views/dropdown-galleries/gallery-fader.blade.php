@extends('layouts.master')

@section('container')
    <div id="container">
        <div id="tj_container" class="tj_container">
            <div class="tj_nav"> <span id="tj_prev" class="tj_prev">Previous</span> <span id="tj_next"
                    class="tj_next">Next</span> </div>
            <div class="tj_wrapper">
                <ul class="tj_gallery" style="margin:0; padding:0">
                    <li><a href="#"><img src="assets/images/1.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/2.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/3.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/4.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/5.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/6.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/7.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/8.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/9.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/10.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/11.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/12.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/13.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/14.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/15.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/16.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/17.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/18.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/19.jpg" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/20.jpg" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!-- END Portfolio -->
        <div style="clear:both"></div>
        <h1 style="padding: 20px 0">Professional Photographer John Doe</h1>
        <!-- First Column -->
        <div class="one-third">
            <div class="heading_bg">
                <h2>Who</h2>
            </div>
            <p><strong>Professional Studios</strong><br>
                NORWAY<br>
                <br>
                Tel: (+47) 99 88 77 66<br>
                mail: mail@studios.com
            </p>
        </div>
        <!-- Second Column -->
        <div class="one-third">
            <div class="heading_bg">
                <h2>Work</h2>
            </div>
            <ul class="container_links">
                <li><a href="#">People</a></li>
                <li><a href="#">Moments</a></li>
                <li><a href="#">Toddler</a></li>
                <li><a href="#">Streetlife</a></li>
            </ul>
        </div>
        <!-- Third Column -->
        <div class="one-third last">
            <div class="heading_bg">
                <h2>Photography</h2>
            </div>
            <blockquote>&quot;Beauty can be seen in all things, seeing and composing the beauty is what separates the
                snapshot from the photograph.&quot;</blockquote>
            <p><small>– Matt Hardy</small></p>
        </div>
        <div style="clear:both; height: 40px"></div>
    </div>
    <!-- END container -->
@endsection
