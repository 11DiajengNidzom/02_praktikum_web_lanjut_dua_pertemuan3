@extends('layouts.master')

@section('container')
    <div id="container">
        <div style="margin-bottom: 15px"> <img src="assets/img/demo/slide_2.jpg" alt="" width="960" height="450"> </div>
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
