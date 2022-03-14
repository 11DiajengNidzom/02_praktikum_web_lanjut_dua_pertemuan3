@extends('layouts.master')

@section('container')
    <div id="container">
        <h1>Template Elements</h1>
        <div class="one-half">
            <div class="heading_bg">
                <h2>Tables</h2>
            </div>
            <table border="0">
                <th>First</th>
                <th>Second</th>
                <th>Third</th>
                <tr>
                    <td>Some</td>
                    <td>Data</td>
                    <td>Goes</td>
                </tr>
                <tr>
                    <td>Here</td>
                    <td>In</td>
                    <td>This</td>
                </tr>
                <tr>
                    <td>Table</td>
                    <td>Cool</td>
                    <td>Oh Yeah!</td>
                </tr>
                <tr>
                    <td>Another Row</td>
                    <td>Almost There</td>
                    <td>Last Cell</td>
                </tr>
            </table>
            <div class="heading_bg">
                <h2>CSS 3 Buttons</h2>
            </div>
            <p><a href="#" class="button">Button</a></p>
            <p><a href="#" class="button">Button With Long Text</a></p>
            <p><a href="#" class="button" style="font-size: 18px">Large Button</a></p>
            <p><a href="#" class="button" style="font-family: Georgia, 'Times New Roman', Times, serif ">Button With
                    Custom Font</a></p>
        </div>
        <!-- END First Column -->
        <div class="one-half last">
            <div class="heading_bg">
                <h2>Tabs</h2>
            </div>
            <ul id="tabify_menu" class="menu_tab" style="margin: 0;">
                <li class="active"><a href="#fane1">Tab 1</a></li>
                <li><a href="#fane2">Tab 2</a></li>
                <li><a href="#fane3">Tab 3</a></li>
            </ul>
            <div id="fane1" class="tab_content">
                <div class="tab_article"> <img src="assets/img/thumb1.jpg" alt="">
                    <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus tui.
                    </p>
                </div>
                <div class="tab_article"> <img src="assets/img/thumb2.jpg" alt="">
                    <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus tui.
                    </p>
                </div>
                <div class="tab_article"> <img src="assets/img/thumb3.jpg" alt="">
                    <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus tui.
                    </p>
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
            <div class="heading_bg" style="clear:both">
                <h2>Slider</h2>
            </div>
            <div id="slider3" class="nivoSlider" style="width: 465px; height: 280px">
                <a href="#">
                    <img title="Heading Here" src="assets/img/demo/slide_11.jpg" alt="" width="465">
                </a> <img src="assets/img/demo/slide_21.jpg" alt="" width="465" />
                <img src="assets/img/demo/slide_31.jpg" alt="" width="465" />
            </div>
        </div>
        <!-- END Second Column -->
        <div style="clear:both; height: 40px"></div>
    </div>
    <!-- close container -->
@endsection
