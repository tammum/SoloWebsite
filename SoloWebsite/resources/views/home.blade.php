<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Solo Creative website</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--custom styles-->
    <style>
        #home-background-video {
            position:fixed;
            top:50%;
            left:50%;
            transform: translateX(-50%) translateY(-50%);
            min-height:100%;
            min-width:100%;
            height:auto;
            width:auto;
            z-index:-1;
            background:url("{{asset('video/solo.jpg')}}");
            background-size:cover;
        }
        #overlay {
            background-color:rgba(0,0,0,0.8);
            position:fixed;
            top:0;
            left:0;
            height:100%;
            width:100%;
            z-index: -1;
        }
        html, body {
            height:100%;
        }
        body {
            color:#212226;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family:"Railway", sans-serif;
        }
        p {
            font-family:"Open Sans", sans-serif;
            font-size:13px;
            font-weight:400;
            line-height:24px;
        }
        section {
            background:#fff;
            overflow:hidden;
        }
        #home {
            background:none;
            height:100%;
        }
        #home-content {
            display:table;
            height:100%;
            width:100%;
        }
        #home-content-inner {
            display:table-cell;
            vertical-align:middle;
        }
        #home-heading h1{
            color:#fff;
            font-size:65px;
            font-weight:100;
            text-transform:uppercase;
            margin:0;
            display:inline-block;
        }
        #home-heading span{
            color: #f4c613;
            font-weight:500;
        }
        #home-header p {
            color:#fff;
            font-weight:100;
            font-size:17px;
            margin:8px 0px 30px;
        }
        .btn-general {
            font-family: "Railway", sans-serif;
            border-radius:28px;
            font-size:13px;
            margin:0px 6px;
            padding:12px 46px 12px 46px;
            -webkit-transition: all .5s;
            transition: all .5s;
        }
        .btn-home {
            color:#fff;
            border:1px solid #fff;
        }
        .btn-home:hover,
        .btn-home:focus {
            color:#fff;
            border:1px solid #f4c613;
            background-color:#f4c613;
        }
        #home-arrow {
            position:absolute;
            left:50%;
            color:#fff;
            font-size:32px;
            height:32px;
            width:32px;
            text-align:center;
            margin-left:-16px;
            bottom:20px;
            z-index: 1;
        }
        #home-arrow:hover,
        #home-arrow:focus {
            color:#f4c613;
        }
        .content-box-lg {
            padding: 120px 0px;
        }
        .vertical-heading h5{
            color:#f4c613;
            font-size:14px;
            font-weight:500;
            text-transform: uppercase;
            word-spacing:9px;
            display:inline-block;
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
            position:relative;
            top:60px;
            left:-63px;
        }
        .vertical-heading h2{
           margin:0 0 0 35px;
            font-size:42px;
            font-weight:100;
            line-height:45px;
        }
        about-right p:first-child {
            margin-bottom:30px;
        }
        #about-02 {
            background-color:#f4f4f4;
        }
        .content-box-md {
            padding:100px 0;
        }
        .about-item {
            background-color:#fff;
            padding:80px 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .about-item i {
            font-size: 42px;
            margin: 0px;
        }
        .about-item h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .about-item hr {
            width: 45px;
            height: 3px;
            background-color:#f4c613;
            margin: 0 auto;
            border: none;
        }
        .about-item p {
            margin-top: 20px;
        }
        .about-item:hover {
            background-color:#f4c613;
        }
        .about-item:hover i,
        .about-item:hover h3,
        .about-item:hover p {
            color:#fff;
        }
        .about-item:hover hr {
            background-color:#fff;
        }
        .about-item:hover i {
            transform: translateY(-25px);
        }
        .about-item,
        .about-item i ,
        .about-item hr {
            -webkit-transition: all 400ms ease-in-out;
            transitions: all 400ms ease-in-out;
        }
    </style>
</head>
<body>
<!-- home section -->
<section id="home">
    <video poster="{{asset('/storage/video/solo.jpg')}}" autoplay loop muted plays-inline id="home-background-video">
        <source src="{{asset('/storage/video/solo.webm')}}">
        <source src="{{asset('/storage/video/solo.mp4')}}">
        <source src="{{asset('/storage/video/solo.ogv')}}">
    </video>
    <!--overlay for the full screen-->
    <div id="overlay"></div>
    <!--text of the website-->
    <div id="home-content">
        <div id="home-content-inner" class="text-center">
            <div id="home-heading">
                <h1>Digital</h1><br>
                <h1>Creative <span>Agency</span></h1>
            </div>
        <div id="home-header">
            <p>The get method may be used to retrieve the contents of a file. The raw string contents of the file will be returned by the method.</p>
        </div>
        <div id="home-button">
            <button class="btn btn-general btn-home" href="#about">Start Now</button>
        </div>
        </div>
    </div>
    <a id="home-arrow"><i class="fa fa-angle-down" id="array-down"></i></a>
</section>

<!-- about section -->
<section id="about">
    <!-- about section one-->
    <div id="about-01">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="about-left">
                            <div class="vertical-heading">
                                <h5>Who we are</h5>
                                <h1>A <strong>story</strong><br> about us</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="about-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at
                                explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis
                                quas aperiam debitis dolor soluta!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at
                                explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis
                                quas aperiam debitis dolor soluta!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-responsive col-xs-12" src="{{asset('/storage/images/shoe.png')}}" alt="image" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section one ends-->
    <!-- about section two starts-->
    <div id="about-02">
        <div class="content-box-md">
            <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="about-item text-center">
                        <i class="fa fa-rocket"></i>
                        <h3>Mission</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at
                           explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam
                           debitis dolor soluta!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-item text-center">
                        <i class="fa fa-eye"></i>
                        <h3>Vission</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at
                            explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam
                            debitis dolor soluta!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-item text-center">
                        <i class="fa fa-pencil"></i>
                        <h3>Passion</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at
                            explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam
                            debitis dolor soluta!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!--team section starts-->
<section id="team">
    <div class="content-box-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="team-left">
                        <div class="vertical-heading">
                            <h5>Who we are</h5>
                            <h1>Meet our<br><strong>Talented</strong>Team</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at
                            explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam
                            debitis dolor soluta!</p>
                    </div>
                </div>
                <div class="col-md-6">right side</div>
            </div>
        </div>
    </div>
</section>
<!--team section ends-->
<!-- jquery Scripts -->
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<!-- bootstrap Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>
</body>
</html>