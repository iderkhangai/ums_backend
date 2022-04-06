<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>UMSH</title>
    <meta name="author" content="tansh" />
    <meta name="description" content="HTML Teamplate" />
    <meta name="keywords" content="student, hungary, umsh" />

    <!-- FAVICON FILES -->
    <link href="{{asset('metch')}}/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144" />
    <link href="{{asset('metch')}}/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="{{asset('metch')}}/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="{{asset('metch')}}/images/logo1.png" rel="shortcut icon" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{asset('metch')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('metch')}}/fonts/iconfonts.css" />
    <link rel="stylesheet" href="{{asset('metch')}}/css/plugins.css" />
    <link rel="stylesheet" href="{{asset('metch')}}/css/style.css" />
    <link rel="stylesheet" href="{{asset('metch')}}/css/responsive.css" />
    <link rel="stylesheet" href="{{asset('metch')}}/css/color.css" />
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">
        <!-- preloader starts -->
        <div class="dtr-preloader">
            <div class="dtr-preloader-inner">
                <div class="dtr-preloader-img"></div>
            </div>
        </div>
        <!-- preloader ends -->

        <!-- Small Devices Header 
============================================= -->
        <div class="dtr-responsive-header fixed-top">
            <div class="container">
                <!-- small devices logo -->
                <a href="index.html"><img src="{{asset('metch')}}/images/logo1.png" alt="logo" width="120px" /></a>
                <!-- small devices logo ends -->

                <!-- menu button -->
                <button id="dtr-menu-button" class="dtr-hamburger" type="button">
                    <span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span>
                </button>
            </div>
            <div class="dtr-responsive-header-menu"></div>
        </div>
        <!-- Small Devices Header ends 
============================================= -->

        <!-- Header 
============================================= -->
        <header id="dtr-header-global" class="fixed-top">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- header left starts -->
                    <div class="dtr-header-left">
                        <!-- logo -->
                        <a class="logo-default dtr-scroll-link logo" href="#home"><img src="{{asset('metch')}}/images/logo1.png" alt="logo" /></a>

                        <!-- logo on scroll -->
                        <a class="logo-alt dtr-scroll-link logo" href="#home"><img src="{{asset('metch')}}/images/logo1.png" alt="logo" width="70%" /></a>
                        <!-- logo on scroll ends -->
                    </div>
                    <!-- header left ends -->

                    <!-- menu starts-->
                    <div class="main-navigation navbar navbar-expand-lg ml-auto">
                        <ul class="dtr-scrollspy navbar-nav dtr-nav dark-nav-on-load dark-nav-on-scroll">
                            <li class="nav-item">
                                <a class="nav-link active" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Our teams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#event">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- menu ends-->

                    <!-- header right starts -->
                    <div class="dtr-header-right">
                        <a data-toggle="modal" data-target="#donation" class="dtr-btn btn-grad-orange dtr-scroll-link donation">Donate now</a>
                    </div>
                    <div class="modal fade" id="donation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <h4 class="modal-title" id="exampleModalLabel">Donation</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="email1">Full Name</label>
                                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Full name">
                                        </div>

                                        <div class="form-group">
                                            <label for="email1">Email address</label>
                                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="email1">Phone number</label>
                                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <div class="modal-footer border-top-0">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- header right ends -->
                </div>
            </div>
        </header>
        <!-- header ends
================================================== -->

        <!-- == main content area starts == -->
        <div id="dtr-main-content">
            <!-- hero section starts
================================================== -->
            <section id="home" class="dtr-section hero-section-top-padding">
                <!-- container starts -->
                <div class="container">
                    <!-- row starts -->
                    <div class="row dtr-pt-100">
                        <!-- column 1 starts -->
                        <div class="col-12 col-lg-7">
                            <!-- wrapper for z index to slider -->
                            <div class="position-relative z-index bg-white">
                                <!--===== image slider starts =====-->
                                <div class="dtr-slick-slider dtr-image-slider dtr-slick-has-arrows slick-arrows-inside arrows-color-light">
                                    <!-- slide 1 starts -->
                                    <div class="dtr-image-slider-item">
                                        <img src="{{asset('metch')}}/images/slide-img1.jpg" alt="image" />
                                    </div>
                                    <!-- slide 1 ends -->

                                    <!-- slide 2 starts -->
                                    <div class="dtr-image-slider-item">
                                        <img src="{{asset('metch')}}/images/slide-img2.jpg" alt="image" />
                                    </div>
                                    <!-- slide 2 ends -->

                                    <!-- slide 3 starts -->
                                    <div class="dtr-image-slider-item">
                                        <img src="{{asset('metch')}}/images/slide-img1.jpg" alt="image" />
                                    </div>
                                    <!-- slide 3 ends -->
                                </div>
                                <!--===== image slider ends =====-->
                            </div>
                            <!-- wrapper for z index to slider ends -->
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-lg-5">
                            <div class="dtr-pt-50 dtr-pl-20">
                                <!-- rotating image starts -->
                                <div class="rotating-img-wrapper dtr-md-display-none">
                                    <div class="rotating-img-inner">
                                        <!-- rotating image -->
                                        <img src="{{asset('metch')}}/images/swirl.svg" alt="image" class="rotating-img" />
                                        <!-- static smiley -->
                                        <img src="{{asset('metch')}}/images/smiley.svg" alt="image" class="static-img" />
                                    </div>
                                </div>
                                <!-- rotating image ends -->

                                <!-- <p class="text-size-lg dtr-mb-0">Smiling faces are the ...</p> -->
                                <h2>Welcome <span class="color-pink">here!</span></h2>
                                <p class="about-us">
                                    <p class="font-weight-500">
                                        The Union of Mongolian Students in Hungary (UMSH)
                                    </p>

                                    is a non-government organization that serves the community, established in Budapest with the commitment to protect the common interests of Mongolian students, studying in Hungarian universities, and support any initiatives concerning academic training,
                                    developing professional skills, engage in art and sport activities, improve their living conditions, and being active in social life.
                                </p>
                            </div>
                        </div>
                        <!-- column 2 ends -->
                    </div>
                    <!-- row ends -->
                </div>
                <!-- container ends -->
            </section>
            <!-- hero section ends
================================================== -->


            <!-- teams section starts
================================================== -->
            <section id="team" class="dtr-section bg-pink">
                <div class="container team">
                    <header class="section-header">
                        <h1 class="section-title ">Meet our <span class="color-pink">Team</span></h1>
                        <p>Responsive Team modules using jquery and CSS only</p>
                    </header>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="member-wrapper">
                                <div class="member">
                                    <div class="photo" style="background-image: url('https://farm5.staticflickr.com/4069/4277734103_d38b5fac84_o.jpg')">
                                    </div>
                                    <div class="info">
                                        <h3>Peter</h3>
                                        <small>Peter</small>
                                        <div class="bio">
                                            <h4>Bio:</h4>
                                            Integer quis mollis purus. Vestibulum ac tortor cursus, fermentum justo at, eleifend neque. Sed laoreet eros urna, sed varius mi finibus vel. Ut ut nisi vitae ligula consequat feugiat. Nulla condimentum ante et ultricies pulvinar. Pellentesque nec ultrices
                                            quam. Curabitur eu imperdiet augue, eu porta libero. ligula consequat feugiat. Nulla condimentum ante et ultricies pulvinar. Pellentesque nec ultrices quam. Curabitur eu imperdiet augue, eu porta libero.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="member-wrapper">
                                <div class="member">
                                    <div class="photo" style="background-image: url('https://farm5.staticflickr.com/4045/4277734075_278d4ddfa0_o.jpg')">
                                    </div>
                                    <div class="info">
                                        <h3>Rickardo</h3>

                                        <div class="bio">
                                            <h4>Bio:</h4>
                                            Integer quis mollis purus. Vestibulum ac tortor cursus, fermentum justo at, eleifend neque. Sed laoreet eros urna, sed varius mi finibus vel. Ut ut nisi vitae ligula consequat feugiat. Nulla condimentum ante et ultricies pulvinar. Pellentesque nec ultrices
                                            quam. Curabitur eu imperdiet augue, eu porta libero.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="member-wrapper">
                                <div class="member">
                                    <div class="photo" style="background-image: url('https://farm5.staticflickr.com/4003/4278480984_157b32696a_o.jpg')">
                                    </div>
                                    <div class="info">
                                        <h3>Sean</h3>

                                        <div class="bio">
                                            <h4>Bio:</h4>
                                            Integer quis mollis purus. Vestibulum ac tortor cursus, fermentum justo at, eleifend neque. Sed laoreet eros urna, sed varius mi finibus vel. Ut ut nisi vitae ligula consequat feugiat. Nulla condimentum ante et ultricies pulvinar. Pellentesque nec ultrices
                                            quam. Curabitur eu imperdiet augue, eu porta libero.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- teams section ends
================================================== -->
            <!-- faq section starts
================================================== -->
            <section id="about" class="dtr-section dtr-py-100 ">
                <div class="container">
                    <!-- row starts -->
                    <div class="row">
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6">
                            <!-- intro -->
                            <h2>About us</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                            </p>

                            <!-- accordion starts -->
                            <div class="dtr-accordion accordion" id="accord-index1">
                                <!-- accordion tab 1 starts -->
                                <div class="card">
                                    <div class="card-header" id="accord-index1-heading1">
                                        <h5 class="dtr-mb-0">
                                            <button class="dtr-btn accordion-btn-link " type="button" data-toggle="collapse" data-target="#accord-index1-collapse1" aria-expanded="true" aria-controls="accord-index1-collapse1">
                                                Goals and Objectivess
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="accord-index1-collapse1" class="collapse show" aria-labelledby="accord-index1-heading1" data-parent="#accord-index1">
                                        <div class="card-body">
                                            <ol class="goals">
                                                <li> To protect the basic interests of students and youths, build the environment to develop independence.
                                                </li>
                                                <li>
                                                    To build a creative community to support students’ self-development and education.</li>
                                                <li>To organize various academic paper, debate, and sports events in order to bring the students together and exchange knowledge and information with other university students</li>
                                                <li>
                                                    To promote Mongolian heritage and culture</li>
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                                <!-- accordion tab 1 ends -->

                                <!-- accordion tab 2 starts -->
                                <div class="card">
                                    <div class="card-header" id="accord-index1-heading2">
                                        <h2 class="dtr-mb-0">
                                            <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse2" aria-expanded="false" aria-controls="accord-index1-collapse2">
                                                Recruitment process
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="accord-index1-collapse2" class="collapse" aria-labelledby="accord-index1-heading2" data-parent="#accord-index1">
                                        <div class="card-body">
                                            <ol class="recruitment-process">
                                                <li>
                                                    Mongolian students studying at Hungarian universities are eligible to become the member of UMSH
                                                </li>
                                                <li>Annually two recruitments are organized. together and exchange knowledge and information with other university students</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- accordion tab 2 ends -->

                                <!-- accordion tab 3 starts -->
                                <!-- <div class="card">
                                    <div class="card-header" id="accord-index1-heading3">
                                        <h2 class="dtr-mb-0">
                                            <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse3" aria-expanded="false" aria-controls="accord-index1-collapse3">
                        Promoting positive living
                      </button>
                                        </h2>
                                    </div>
                                    <div id="accord-index1-collapse3" class="collapse" aria-labelledby="accord-index1-heading3" data-parent="#accord-index1">
                                        <div class="card-body">
                                            To organize various academic paper, debate, and sports events in order to bring the students together and exchange knowledge and information with other university students To promote Mongolian heritage and culture
                                        </div>
                                    </div>
                                </div> -->
                                <!-- accordion tab 3 ends -->
                            </div>
                            <!-- accordion ends -->
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 dtr-sm-mt-30">

                            <!-- wrapper for z index to slider -->
                            <div class="position-relative z-index bg-white">
                                <!--===== image slider starts =====-->
                                <div class="dtr-slick-slider dtr-image-slider dtr-slick-has-arrows slick-arrows-inside arrows-color-light">
                                    <!-- slide 1 starts -->
                                    <div class="dtr-image-slider-item">
                                        <img src="https://www.anime-internet.com/content/images/2021/11/Itachi-Uchiha.jpg" alt="image" />
                                    </div>
                                    <!-- slide 1 ends -->

                                    <!-- slide 2 starts -->
                                    <div class="dtr-image-slider-item">
                                        <img src="https://i.ytimg.com/vi/NREGMnjgtQc/maxresdefault.jpg" alt="image" />
                                    </div>
                                    <!-- slide 2 ends -->

                                    <!-- slide 3 starts -->
                                    <div class="dtr-image-slider-item">
                                        <img src="https://wallpaperaccess.com/full/4129901.jpg" alt="image" class="img-responsive" />
                                    </div>
                                    <!-- slide 3 ends -->
                                </div>
                                <!--===== image slider ends =====-->
                            </div>
                            <!-- wrapper for z index to slider ends -->

                        </div>
                        <!-- column 2 ends -->
                    </div>
                    <!-- row ends -->
                </div>
            </section>
            <!-- faq section ends
================================================== -->
            <!-- cta section starts
================================================== -->
            <section class="dtr-section dtr-py-50 dtr-section-with-bg" style="background-image: url({{asset('metch')}}/images/cta-bg.jpg)">
                <!-- overlay -->
                <div class="dtr-overlay"></div>
                <div class="container dtr-overlay-content">
                    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between small-device-center">
                        <!-- heading -->
                        <i class="icon-mbri-gift dtr-mr-40 dtr-rotate-minus20 text-size-xxl color-white"></i>
                        <p class="dtr-my-10 mr-auto dtr-md-mr-0 text-size-lg color-white">
                            Donate now to support our activities
                        </p>
                        <!-- button -->
                        <a data-toggle="modal" data-target="#donation" class="dtr-btn btn-grad-orange donation">Make a
                            Donation</a>
                    </div>
                </div>
            </section>
            <!-- cta section ends
================================================== -->
            <!-- events section starts
================================================== -->
            <section class="dtr-section dtr-py-100 bg-pink" id="event">
                <div class="container">
                    <!-- row starts -->
                    <div class="row">
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-12">
                            <!-- intro -->
                            <h2>Events</h2>
                            <div class="event-section">

                                <span class="hr-role"></span>
                                <div class="event-tab">
                                    <ul id="filters" class="clearfix">
                                        <li class="filter" data-filter=".2020">2020</li>
                                        <li class="filter" data-filter=".2021">2021</li>
                                        <li class="filter active" data-filter=".2022">2022</li>
                                    </ul>
                                </div>
                                <div class="event-grid">
                                    <div class="event 2020" data-cat="2020">
                                        <div class="event-wrapper first">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Snippet</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event 2021" data-cat="2021">
                                        <div class="event-wrapper second">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Design</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event 2022" data-cat="2022">
                                        <div class="event-wrapper third">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">2022</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event 2021" data-cat="2021">
                                        <div class="event-wrapper second">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Design</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event 2021" data-cat="2021">
                                        <div class="event-wrapper third">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Full Project</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event 2020" data-cat="2020">
                                        <div class="event-wrapper first">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Snippet</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event 2020" data-cat="2020">
                                        <div class="event-wrapper first">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Snippet</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event 2020" data-cat="2020">
                                        <div class="event-wrapper first">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Snippet</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event 2020" data-cat="2020">
                                        <div class="event-wrapper first">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Snippet</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event 2020" data-cat="2020">
                                        <div class="event-wrapper first">
                                            <div class="event-bg"></div>
                                            <div class="label">
                                                <div class="label-text">
                                                    <h5 class="event-title">Event Name</h5>
                                                    <span class="text-category">Snippet</span>
                                                    <a href="#" class="template-btn" target="_blank">View</a>
                                                </div>
                                                <div class="label-bg"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column 1 ends -->

                    </div>
                    <!-- row ends -->
                </div>
            </section>
            <!-- events section ends
================================================== -->


            <!-- contact section starts
================================================== -->
            <section id="contact" class="dtr-section dtr-py-50 bg-blue">
                <!-- dashed divider starts -->
                <span class="divider-dashed border-blue"></span>
                <!-- dashed divider ends -->

                <div class="container">
                    <!-- row starts -->
                    <div class="row dtr-py-100">
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6">
                            <h4 class="color-white">Leave your message</h4>

                            <!-- form starts -->
                            <div class="dtr-form">
                                <form id="contactform" method="post" action="php/contact-form.php">
                                    <fieldset>
                                        <div class="dtr-form-row dtr-form-row-2col">
                                            <p class="dtr-form-column">
                                                <input name="name" type="text" placeholder="Name" />
                                            </p>
                                            <p class="dtr-form-column">
                                                <input name="phone" type="text" placeholder="Phone" />
                                            </p>
                                        </div>
                                        <p>
                                            <input name="email" class="required email" type="text" placeholder="Email address" />
                                        </p>
                                        <p class="antispam">
                                            Leave this empty: <br />
                                            <input name="url" />
                                        </p>
                                        <p>
                                            <textarea rows="6" name="message" id="message" class="required" placeholder="Message"></textarea>
                                        </p>
                                        <p>
                                            <button class="dtr-btn btn-grad-orange" type="submit">
                                                Send Message
                                            </button>
                                        </p>
                                        <div id="result"></div>
                                    </fieldset>
                                </form>
                            </div>
                            <!-- form ends -->

                            <p class="dtr-mt-20 color-white">
                                * We don’t share your personal info.
                            </p>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 dtr-sm-mt-30">
                            <h4 class="color-white">Walk-in our office</h4>

                            <!-- map starts -->
                            <div class="dtr-map clearfix dtr-p-10">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.592466282716!2d19.052256515626656!3d47.497851979177575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc41d2b5e169%3A0xef31e078a69625ad!2zQnVkYXBlc3QsIERlw6FrIEZlcmVuYyB0w6ly!5e0!3m2!1sen!2shu!4v1644344210308!5m2!1sen!2shu"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- map ends -->

                            <h4 class="color-white dtr-mt-50">Contact Info</h4>

                            <!-- nested row starts -->
                            <div class="row">
                                <!-- nested column 1 starts -->
                                <div class="col-12 col-md-6 color-white">
                                    <p>
                                        Pipa utca 4<br />
                                        <!-- <br /> -->
                                        Budapest - 1093.
                                    </p>
                                </div>
                                <!-- nested column 1 ends -->

                                <!-- nested column 2 starts -->
                                <div class="col-12 col-md-6 color-white dtr-sm-mt-20">

                                    <p>
                                        <i class="icon-envelope1 dtr-mr-15"></i><a href="mailto:sayhello@example.com" class="accent-color-hover">monhunstudentcouncil@gmail.com</a>
                                    </p>
                                    <p>
                                        <i class="icon-phone-alt dtr-mr-15"></i>+36 456 7890/91/92
                                    </p>

                                </div>
                                <!-- nested column 2 ends -->
                            </div>
                            <!-- nested row starts -->
                        </div>
                        <!-- column 2 ends -->
                    </div>
                    <!-- row ends -->
                </div>

                <!-- dashed divider starts -->
                <span class="divider-dashed border-purple"></span>
                <!-- dashed divider ends -->
            </section>
            <!-- contact section ends
================================================== -->

            <!-- footer section starts
================================================== -->
            <footer id="dtr-footer">
                <div class="container">
                    <div class="row small-device-center">
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-9 dtr-sm-mb-20">
                            <p>© Copyright 2022 Union of Mongolian Students in Hungary</p>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-3">
                            <div class="dtr-social-square">
                                <ul class="dtr-social dtr-social-list social-light text-left">
                                    <li class="brand-instagram">
                                        <a href="#" class="dtr-instagram" target="_blank" title="instagram"></a>
                                    </li>
                                    <li class="brand-facebook">
                                        <a href="#" class="dtr-facebook" target="_blank" title="facebook"></a>
                                    </li>
                                    <li class="brand-linkedin">
                                        <a href="#" class="dtr-linkedin" target="_blank" title="linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- column 2 ends -->
                    </div>
                </div>
            </footer>
            <!-- footer section ends
================================================== -->
        </div>
        <!-- == main content area ends == -->
    </div>
    <!-- #dtr-wrapper ends -->
    <!-- <div class='scrolltop'>
        <div class='scroll icon'>
            </small>Go up</small>
        </div>
    </div> -->
    <!-- JS FILES -->
    <script src="{{asset('metch')}}/js/jquery.min.js"></script>
    <script src="{{asset('metch')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('metch')}}/js/plugins.js"></script>
    <script src="{{asset('metch')}}/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
</body>

</html>