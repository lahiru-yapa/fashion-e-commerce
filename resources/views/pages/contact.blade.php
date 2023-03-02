@extends('component.layout')

@section('content')
       
       
       
       <!-- BEGIN: Page Banner Section -->
        <section class="pageBannerSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pageBannerContent text-center">
                            <h2>Contact</h2>
                            <div class="pageBannerPath">
                                <a href="index.html">Home</a> <i> > </i> <span>Contact</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- END: Page Banner Section -->

        <!-- BEGIN: Contact Section -->
        <section class="stayConnected">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="secTitle">Stay Connected</h2>
                        <p class="secDesc">Showing our latest arrival on this summer</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="contactItems">
                            <div class="contactItem">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h5>Location</h5>
                                <p>20 Bordeshi, New York, Usa</p>
                            </div>
                            <div class="contactItem">
                                <span><i class="fa-solid fa-phone"></i></span>
                                <h5>Phone</h5>
                                <p>+123 456 789000</p>
                            </div>
                            <div class="contactItem">
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <h5>Email</h5>
                                <p>hello@ulina.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-2">
                        <form action="#" method="post" class="contactForm" id="contact_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="required" type="text" name="conName" placeholder="Your name">
                                </div>
                                <div class="col-md-6">
                                    <input class="required" type="email" name="conEmail" placeholder="Your email">
                                </div>
                                <div class="col-md-6">
                                    <input class="required" type="text" name="conPhone" placeholder="Your phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="conWeb" placeholder="Website">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="required" name="message" placeholder="Write your message here"></textarea>
                                </div> 
                                <div class="col-md-12">
                                    <button type="submit" class="ulinaBTN">
                                        <span>Submit Now</span>
                                    </button>
                                    <div class="alert con_message"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Contact Section -->

        <!-- BEGIN: Map Section -->
        <section class="ulinaMapSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ulinaContactMap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47193.43983742056!2d-0.17044849758677658!3d51.56274009226203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ee72f46b669a816!2zNTHCsDM0JzA5LjAiTiAwwrAxMCc0Ni4zIlc!5e0!3m2!1sen!2sbd!4v1659724093339!5m2!1sen!2sbd" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Map Section -->

        <!-- BEGIN: Footer Section -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <aside class="widget aboutWidget">
                            <div class="footerLogo">
                                <a href="index.html"><img src="images/logo2.png" alt="Ulina"/></a>
                            </div>
                            <div class="aboutWidContent">
                                Quis nostrud exercitatin ullamc boris nisi ut aliquip ex ea commodo conse.
                            </div>
                            <div class="subscribForm">
                                <form method="post" action="#">
                                    <input type="email" name="subsEmail" placeholder="Your email here"/>
                                    <button type="submit"><i class="fa-solid fa-envelope"></i></button>
                                </form>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <aside class="widget">
                            <h3 class="widgetTitle">Address</h3>
                            <div class="addressContent">
                                <div class="singleAddress">
                                    <i class="fa-solid fa-location-dot"></i>
                                    20, Awesome Road,
                                    New York, Usa 4D BS3
                                </div>
                                <div class="singleAddress">
                                    <i class="fa-solid fa-phone"></i>
                                    +123 456 7890
                                </div>
                                <div class="singleAddress">
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="mailto:hello@ulina.com">hello@ulina.com</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <aside class="widget">
                            <h3 class="widgetTitle">Useful Links</h3>
                            <ul>
                                <li><a href="javascript:void(0);">Shop Coupon</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="javascript:void(0);">Carrer</a></li>
                                <li><a href="javascript:void(0);">Supports</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <aside class="widget twoColMenu">
                            <h3 class="widgetTitle">Categories</h3>
                            <ul>
                                <li><a href="shop_full_width.html">Men</a></li>
                                <li><a href="shop_left_sidebar.html">Bags</a></li>
                                <li><a href="shop_right_sidebar.html">Women</a></li>
                                <li><a href="shop_full_width.html">Jewellery</a></li>
                                <li><a href="shop_left_sidebar.html">Kids</a></li>
                                <li><a href="shop_left_sidebar.html">Cloths</a></li>
                                <li><a href="shop_right_sidebar.html">Accesories</a></li>
                                <li><a href="shop_full_width.html">Beauty Items</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="row footerAccessRow">
                    <div class="col-md-6">
                        <div class="footerSocial">
                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footerPayments">
                            <a href="javascript:void(0);"><i class="fa-brands fa-cc-paypal"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-cc-stripe"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-cc-mastercard"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-cc-visa"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-cc-apple-pay"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-cc-amazon-pay"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footerBar"></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer Section -->

        <!-- BEGIN: Site Info Section -->
        <section class="siteInfoSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="siteInfo">
                            All rights reserved &nbsp;<a href="index.html">Ulina</a>&nbsp;&nbsp;&copy;&nbsp;&nbsp;2022
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footerNav">
                            <ul>
                                <li><a href="javascript:void(0);">Terms & Condition</a></li>
                                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                <li><a href="javascript:void(0);">Legal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Site Info Section -->

        <!-- BEGIN: Back To Top -->
        <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-angles-up"></i></a>
        <!-- END: Back To Top -->

        @endsection