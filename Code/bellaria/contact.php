<?php include 'include/header.php' ?>


<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo">
            <a href="#" title="Sticky Logo"><img src="images/logoT.png" alt="Sticky Logo"></a>
        </div>

        <!--Right Col-->
        <div class="nav-outer">
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

            <!-- Main Menu -->
            <nav class="main-menu">
                <!--Keep This Empty / Menu will come through Javascript-->
            </nav>
            <!-- Main Menu End-->
        </div>
    </div>
</div>
<!-- End Sticky Menu -->

<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo">
            <a href="#" title="Sticky Logo"><img src="images/images/logoT.png" alt="Sticky Logo"></a>
        </div>

        <!--Right Col-->
        <div class="nav-outer">
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

            <!-- Main Menu -->
            <nav class="main-menu">
                <!--Keep This Empty / Menu will come through Javascript-->
            </nav>
            <!-- Main Menu End-->
        </div>
    </div>
</div>
<!-- End Sticky Menu -->

<!-- Mobile Header -->
<div class="mobile-header">
    <div class="logo">
        <a href="index.html"><img src="images/images/logoT.png" alt="logo" title="countut us"></a>
    </div>

    <!--Nav Box-->
    <div class="nav-outer clearfix">
        <!--Keep This Empty / Menu will come through Javascript-->
    </div>
</div>

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <nav class="menu-box">
        <div class="nav-logo">
            <a href="index.html"><img src="images/images/logoT.png" alt="" title=""></a>
        </div>
        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
    </nav>
</div>
<!-- End Mobile Menu -->

<!-- Header Search -->
<div class="search-popup">
    <span class="search-back-drop"></span>

    <div class="search-inner">
        <button class="close-search"><span class="fa fa-times"></span></button>
        <form method="post" action="http://html.cwsthemes.com/bellaria/blog-showcase.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search..." required>
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- End Header Search -->
</header>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title" style="background-image:url(images/Contacts.jpg)">
    <div class="auto-container">
        <h1>Contacts</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="contact-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="divider"><img src="images/icons/divider_4.png" alt=""></div>
            <h2>Contact Us</h2>
            <div class="text">We’d love to hear from you! <br> Have some questions about our gourmet coffee beans or
                need
                help selecting the right gourmet coffee? <br>
                We can help.</div>
        </div>

        <div class="row clearfix">
            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="title">
                        <div class="icon"><img src="images/icons/icon-devider-gray.png" alt=""></div>
                        <h4>Opening Hours</h4>
                    </div>

                    <ul class="contact-info">
                        <li>ٍSunday– Saturday <br>24 Hours</li>

                    </ul>
                </div>
            </div>

            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12 order-3">
                <div class="inner-column">
                    <div class="title">
                        <div class="icon"><img src="images/icons/icon-devider-gray.png" alt=""></div>
                        <h4>Our Contacts</h4>
                    </div>

                    <ul class="contact-info">
                        <li>Jordan</li>
                        <li>00962-778-982-303</li>
                        <li>coffee_and_you@gmal.com</li>
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title">
                        <div class="icon"><img src="images/icons/icon-devider-gray.png" alt=""></div>
                        <h4>Send Message</h4>
                    </div>
                    <div class="contact-form">
                        <form action="#" method="post" id="email-form">

                            <div class="form-group">
                                <div class="response"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" class="username" placeholder="Your Name *">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="email" placeholder="Your Email *">
                            </div>

                            <div class="form-group">
                                <textarea name="contact_message" placeholder="Text Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn" type="button" id="submit" name="submit-form">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section -->

<?php include 'include/footer.php' ?>