<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Limon - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/preloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/circle.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/fm.revealator.jquery.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{asset('public/css/skins/yellow.css')}}" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('public/css/skins/blue.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('public/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('public/css/skins/yellow.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('public/css/skins/blueviolet.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('public/css/skins/goldenrod.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('public/css/skins/magenta.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('public/css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('public/css/skins/purple.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('public/css/skins/red.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('public/css/skins/yellowgreen.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/styleswitcher.css')}}" />

    <!-- Modernizr JS File -->
    <script src="{{asset('public/js/modernizr.custom.js')}}"></script>
</head>

<body class="home">
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="{{asset('public/img/styleswitcher/purple.png')}}" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="{{asset('public/img/styleswitcher/red.png')}}" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="{{asset('public/img/styleswitcher/blueviolet.png')}}" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="{{asset('public/img/styleswitcher/blue.png')}}" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="{{asset('public/img/styleswitcher/goldenrod.png')}}" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="{{asset('public/img/styleswitcher/magenta.png')}}" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="{{asset('public/img/styleswitcher/yellowgreen.png')}}" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="{{asset('public/img/styleswitcher/orange.png')}}" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="{{asset('public/img/styleswitcher/green.png')}}" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="{{asset('public/img/styleswitcher/yellow.png')}}" alt="yellow"/></a>
            </li>
        </ul>
        <a href="https://themeforest.net/item/Limon-personal-portfolio/26761598?irgwc=1&clickid=UBs0rDX6YxyJWfewUx0Mo3E1UkiwozXD10XATw0&iradid=275988&irpid=1327395&iradtype=ONLINE_TRACKING_LINK&irmptype=mediapartner&mp_value1=&utm_campaign=af_impact_radius_1327395&utm_medium=affiliate&utm_source=impact_radius" class="waves-effect waves-light font-weight-700 purchase"><i class="fa fa-shopping-cart"></i> Purchase</a>
        <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="{{ url('/about') }}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="{{ url('/project') }}">
                <h2>Project</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-comments"></i>
            <a href="{{ url('/blog') }}">
                <h2>Blog</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="{{ url('/contact') }}">
                <h2>Contact</h2>
            </a>
        </li>
        
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="{{ url('/about') }}"><i class="fa fa-user"></i><span>About Me</span></a></li>
                <li><a href="{{ url('/project') }}"><i class="fa fa-folder-open"></i><span>Project</span></a></li>
                <li><a href="{{ url('/blog') }}"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Main Content Starts -->
@yield('contact')
<!-- Main Content Ends -->

<!-- Template JS Files -->
<script src="{{asset('public/js/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('public/js/styleswitcher.js')}}"></script>
<script src="{{asset('public/js/preloader.min.js')}}"></script>
<script src="{{asset('public/js/fm.revealator.jquery.min.js')}}"></script>
<script src="{{asset('public/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('public/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('public/js/classie.js')}}"></script>
<script src="{{asset('public/js/cbpGridGallery.js')}}"></script>
<script src="{{asset('public/js/jquery.hoverdir.js')}}"></script>
<script src="{{asset('public/js/popper.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>

</body>

</html>
