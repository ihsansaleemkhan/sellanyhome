<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en-US" class="no-js ie ie6 ie-lte7 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 7 ]><html lang="en-US" class="no-js ie ie7 ie-lte7 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 8 ]><html lang="en-US" class="no-js ie ie8 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 9 ]><html lang="en-US" class="no-js ie ie9 ie-lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US" class="no-js"><!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <!------------------------------#Site Title#----------------------------->
    <title>sellanyhome.lk</title>
    <!----------------------------------------------------------------------->
    <link rel="shortcut icon" href="fav-ico.png" />
    <meta name='robots' content='noindex,nofollow' />
    <link rel='stylesheet' id='realexpert_bootstrap_main_css-css'  href='library/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='realexpert_bootstrap_responsive_css-css'  href='library/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='realexpert_font_awesome_css-css'  href='library/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='realexpert_font_awesome_css_ie7-css'  href='library/font-awesome/css/font-awesome-ie7.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider_css-css'  href='library/flexslider/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='default-style-css'  href='style.css' type='text/css' media='all' />
    <script type='text/javascript' src='js/jquery.js?ver=1.10.2'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.2.1'></script>
</head>
<body>
<div class="container-full">
    <header id="header" role="banner">
        <div class="header-background">
            <div class="container">
                <div class="row-fluid">
                    <div class="pull-left">
                        <!---------------------------- #Site Logo# ------------------------->
                        <a href="{{route('home')}}" title="SellAnyHome.lk" rel="home"><img class="site-logo" width="80" height="20"  src="images/logo.png" alt="sellanyhome.lk" /></a>
                        <!------------------------------------------------------------------>
                    </div>
                    <div class="pull-right">
                        <div class="top-menu">
                            <!----------------------------------- #Contact Information# ------------------------------------------>
                            <span class="contact-info"><i class="contact-email"></i><a href="#">sellanyhome.lk@gmail.com</a></span>
                            <span class="contact-info"><i class="contact-phone"></i>0776776712</span>
                            <!---------------------------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-background">
            <div class="container">
                <div class="clearfix navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse collapse">
                                <nav id="nav-main" role="navigation">
                                    <ul id="menu-primary-menu" class="nav">
                                        <li id="menu-item-1536" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children dropdown menu-item-1536">
                                            <!-------------------------#Parent Menu#---------------------->
                                            <a class="dropdown-toggle" href="{{route('home')}}">Home</a>
                                            <!------------------------------------------------------------>
                                        </li>
                                        <li id="menu-item-1866" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1866"><a href="{{route('property-listings')}}">Property Listing</a></li>
                                     {{--   <li id="menu-item-1649" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-1649"><a class="dropdown-toggle">Property Types</a>
                                            <ul class="dropdown-menu">
                                                <li id="menu-item-1867" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1867"><a href="property-listings-grid.html">Apartments</a></li>
                                                <li id="menu-item-1868" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1868"><a href="property-listings-grid.html">Bungalows</a></li>
                                                <li id="menu-item-1869" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1869"><a href="property-listings-grid.html">Condominium</a></li>
                                                <li id="menu-item-1870" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1870"><a href="property-listings-grid.html">Villas</a></li>
                                            </ul>
                                        </li>--}}
                                        <li id="menu-item-1648" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-1648"><a class="dropdown-toggle" href="{{route('agents')}}">Agents</a>
                                            <ul class="dropdown-menu">
                                                <li id="menu-item-1730" class="menu-item menu-item-type-post_type menu-item-object-agent menu-item-1730"><a href="{{route('agent-single')}}">Julianne Hough</a></li>
                                                <li id="menu-item-1731" class="menu-item menu-item-type-post_type menu-item-object-agent menu-item-1731"><a href="{{route('agent-single')}}">Ben Dover</a></li>
                                            </ul>
                                        </li>
                                      {{--  <li id="menu-item-1589" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-1589"><a class="dropdown-toggle" href="blog.html">Blog</a>
                                        </li>--}}
                                        <li id="menu-item-1592" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1592"><a href="{{route('contact-us')}}">Contact Us</a></li>
                                    </ul>
                                    <div id="social-network">
                                        <!-----------------------------------------#Social Icon URL#------------------------------>
                                        <a class="fb" href="http://www.facebook.com/" title="Facebook"><i class="icon-facebook"></i></a>
                                        <a class="tw" href="http://www.twitter.com/" title="Twitter"><i class="icon-twitter"></i></a>
                                        <a class="rss" href="http://feeds.feedburner.com/" title="RSS"><i class="icon-rss"></i></a>
                                        <a class="gp" href="http://www.plus.google.com/" title="Google Plus"><i class="icon-google-plus"></i></a>
                                        <!---------------------------------------------------------------------------------------->
                                    </div>
                                </nav> <!-- /#nav-main -->
                            </div>

                        </div>

                    </div>
                </div><!-- /.navbar -->
            </div>
        </div>
    </header><!-- /#header -->