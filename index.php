<?php
    require_once ("conn/conn.php");
    include ("includes/header.inc.php");
    include ("includes/nav.inc.php");
?>
<!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="item bg-img valign" data-overlay-dark="5" data-background="<?= PROOT; ?>assets/media/slider/1.jpg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-7 col-md-12 text-center">
                            <h5><div class="icon"><i class="flaticon-courthouse"></i></div> Realiable legal solution</h5>
                            <h3>We are here for the <span>voice of justice</span></h3> 
                            <a href="#" class="button-3">Explore Company<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img valign" data-overlay-dark="5" data-background="<?= PROOT; ?>assets/media/slider/4.jpg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-7 col-md-12 text-center">
                            <h5><div class="icon"><i class="flaticon-courthouse"></i></div> Realiable legal solution</h5>
                            <h3>We are here to fight against <span>any violance</span></h3> 
                            <a href="#" class="button-3">Explore Company<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img valign" data-overlay-dark="5" data-background="<?= PROOT; ?>assets/media/slider/3.jpg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-7 col-md-12 text-center">
                            <h5><div class="icon"><i class="flaticon-courthouse"></i></div> Realiable legal solution</h5>
                            <h3>We here for provide <span>legal consultancy</span></h3> 
                            <a href="#" class="button-3">Explore Company<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> About law firm
                    </div>
                    <div class="section-title">We are here to fight against <span>any violance</span></div>
                    <p>Lawyer sit amet risus ac duin auctor posuere fanish amet the acinia lecratusan risus facilis semper etiam fermen.</p>
                    <ul class="page-list list-unstyled mb-25">
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Full service corporate & business law.</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Realiable and innovative legal solutions.</p>
                            </div>
                        </li>
                    </ul> <a href="#" class="button-2">Discover more<span></span></a>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="year-box vert-move">
                            <div class="number">20</div>
                            <div class="txt">Years of experience</div>
                            <div class="number-bg"></div>
                        </div> <img src="img/about-01.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Case Study Box -->
    <section class="case-study-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <i class="icon flaticon-mace"></i>
                        <div class="cont">
                            <h5>Legal Production</h5>
                            <p>Lorem ipsum amet quam miss nestibulum drana fermen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <i class="icon flaticon-balance"></i>
                        <div class="cont">
                            <h5>Private</h5>
                            <p>Lorem ipsum amet quam miss nestibulum drana fermen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <i class="icon flaticon-mortarboard"></i>
                        <div class="cont">
                            <h5>Winning Awards</h5>
                            <p>Lorem ipsum amet quam miss nestibulum drana fermen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About 2 -->
    <section class="about section-padding bg-darkbrown">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12 animate-box" data-animate-effect="fadeInLeft"> <img class="img" src="img/about-02.jpg" alt=""> </div>
                <div class="col-lg-5 offset-lg-1 col-md-12 animate-box" data-animate-effect="fadeInRight">
                    <div class="section-subtitle text-white">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> People make the difference
                    </div>
                    <div class="section-title white">We here for provide <span>legal consultancy</span></div>
                    <p>All people are equal before the law. A good attorney is what makes a difference. Lorem aliquam sit amet auctor the done vitae risus duise in the miss ranish fermen.</p>
                    <div class="about-bottom mt-30"> <img src="img/signature.svg" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-rol">President & Co-Founder</div>
                            <div class="about-name">Emily H. McGill</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Case Study -->
    <section class="case-study section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> Areas of practice
                    </div>
                    <div class="section-title">Case <span>Studies</span></div>
                    <p>Lawyer sit amet risus ac duin auctor posuere fanish amet the acinia lecra fermen.</p> <a href="#" class="button-2">Discover more<span></span></a>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="case-study-container">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="img"> <img src="img/case/1.jpg" alt=""> </div>
                                <div class="con">
                                    <div class="title">Criminal
                                        <br>Issue
                                    </div>
                                    <div class="arrow"> <a href="case-study-page.html"><span class="fa-light fa-arrow-right"></span></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="img/case/2.jpg" alt=""> </div>
                                <div class="con">
                                    <div class="title">Family
                                        <br>Violence
                                    </div>
                                    <div class="arrow"> <a href="case-study-page.html"><span class="fa-light fa-arrow-right"></span></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="img/case/3.jpg" alt=""> </div>
                                <div class="con">
                                    <div class="title">Car
                                        <br>Accidents
                                    </div>
                                    <div class="arrow"> <a href="case-study-page.html"><span class="fa-light fa-arrow-right"></span></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="img/case/4.jpg" alt=""> </div>
                                <div class="con">
                                    <div class="title">Marriage
                                        <br>& Divorce
                                    </div>
                                    <div class="arrow"> <a href="case-study-page.html"><span class="fa-light fa-arrow-right"></span></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="img/case/5.jpg" alt=""> </div>
                                <div class="con">
                                    <div class="title">Real Estate
                                        <br>& Construction
                                    </div>
                                    <div class="arrow"> <a href="case-study-page.html"><span class="fa-light fa-arrow-right"></span></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="img/case/6.jpg" alt=""> </div>
                                <div class="con">
                                    <div class="title">Bank
                                        <br>Protected
                                    </div>
                                    <div class="arrow"> <a href="case-study-page.html"><span class="fa-light fa-arrow-right"></span></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <section class="section-padding video-wrapper video bg-img bg-fixed" data-overlay-dark="5" data-background="img/slider/2.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 text-center mb-20">
                    <div class="section-subtitle text-white">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> Watch law firm
                    </div>
                    <div class="section-title white">Law Firm <span>Promo Video</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="vid" href="https://youtu.be/LK_Agkm-_wY">
                        <div class="vid-butn"> <span class="icon"><i class="ti-control-play"></i></span> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Practice Areas -->
    <section class="practice-areas section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> Legal case studies
                    </div>
                    <div class="section-title">General <span>&</span> Legal <span>Practice Areas</span></div>
                    <p>Lawyer sit amet risus ac duin auctor posuere fanish amet the acinia lecra fermen.</p> <a href="#" class="button-2">Discover more<span></span></a>
                </div>
                <div class="col-lg-7 offset-lg-1 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <a href="case-study-page.html"> <i class="flaticon-courthouse"></i>
                                    <h5>Real Estate Law</h5>
                                    <div class="shape"> <i class="flaticon-courthouse"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <a href="case-study-page.html"> <i class="flaticon-balance"></i>
                                    <h5>Personal Law</h5>
                                    <div class="shape"> <i class="flaticon-balance"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <a href="case-study-page.html"> <i class="flaticon-wounded"></i>
                                    <h5>Personal Injury</h5>
                                    <div class="shape"> <i class="flaticon-wounded"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <a href="case-study-page.html"> <i class="flaticon-suitcase"></i>
                                    <h5>Business Law</h5>
                                    <div class="shape"> <i class="flaticon-suitcase"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <a href="case-study-page.html"> <i class="flaticon-mortarboard"></i>
                                    <h5>Education Law</h5>
                                    <div class="shape"> <i class="flaticon-mortarboard"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <a href="case-study-page.html"> <i class="flaticon-thief"></i>
                                    <h5>Criminal Law</h5>
                                    <div class="shape"> <i class="flaticon-thief"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials section-padding bg-lightbrown">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-10 text-center">
                    <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> Our satisfied clients
                    </div>
                    <div class="section-title">What Our <span>Clients Say</span>?</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item mt-10">
                            <div class="info valign">
                                <div class="full-width">
                                    <p>Best lawyers in the area. Hard working, attentive, very knowledgeable, ethical. You can’t do better.</p>
                                    <div class="review-title">
                                        <div class="img"> <img src="img/team/1.jpg" alt=""> </div>
                                        <h6>Emily Martin</h6>
                                        <div class="icons"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-10">
                            <div class="info valign">
                                <div class="full-width">
                                    <p>These firms exceed client expectations consistently and demonstrate deep business understanding.</p>
                                    <div class="review-title">
                                        <div class="img"> <img src="img/team/2.jpg" alt=""> </div>
                                        <h6>James Martin</h6>
                                        <div class="icons"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-10">
                            <div class="info valign">
                                <div class="full-width">
                                    <p>Best lawyers in the area. Hard working, attentive, very knowledgeable, ethical. You can’t do better.</p>
                                    <div class="review-title">
                                        <div class="img"> <img src="img/team/3.jpg" alt=""> </div>
                                        <h6>Olivia Brown</h6>
                                        <div class="icons"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-30">
                    <div class="section-info">
                        <div class="tag">Trust</div>
                        <div class="desc">Genuine 1000+ people trusting <span class="text-decoration-line-bottom">Lawdit</span> law firm.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-20">
                    <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> Qualified experts
                    </div>
                    <div class="section-title">Meet Our <span>Attorneys</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="img"> <img src="img/team/1.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Rhea McKean</a></h5>
                                <p>Criminal Lawyer</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"> <img src="img/team/2.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Martin Brown</a></h5>
                                <p>Family Lawyer</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"> <img src="img/team/3.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Sophia Mia</a></h5>
                                <p>Corporate Lawyer</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"> <img src="img/team/4.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Micheal Dan</a></h5>
                                <p>Business Lawyer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog section-padding bg-lightbrown">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-20">
                    <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> Latest news
                    </div>
                    <div class="section-title">Updated <span>Latest News</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/blog/1.jpg" class="img-fluid" alt="">
                                <div class="cat">Attorney</div>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">When to contact an attorney</a></h4>
                                <p>Lorem ipsum quisque sodales miss the varius rana duru fermen.</p>
                                <div class="author">
                                    <div>
                                        <h5>29 Apr 2025</h5>
                                        <h5>by <a href="#" class="text-decoration-line-bottom">Martin Dan</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/blog/2.jpg" class="img-fluid" alt="">
                                <div class="cat">Employee</div>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Wrongfully firing employee</a></h4>
                                <p>Lorem ipsum quisque sodales miss the varius rana duru fermen.</p>
                                <div class="author">
                                    <div>
                                        <h5>27 Apr 2025</h5>
                                        <h5>by <a href="#" class="text-decoration-line-bottom">Emily Brown</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/blog/3.jpg" class="img-fluid" alt="">
                                <div class="cat">Rights</div>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Child protection rights law</a></h4>
                                <p>Lorem ipsum quisque sodales miss the varius rana duru fermen.</p>
                                <div class="author">
                                    <div>
                                        <h5>25 Apr 2025</h5>
                                        <h5>by <a href="#" class="text-decoration-line-bottom">Frank White</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/blog/4.jpg" class="img-fluid" alt="">
                                <div class="cat">Internship</div>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">To Law students internship</a></h4>
                                <p>Lorem ipsum quisque sodales miss the varius rana duru fermen.</p>
                                <div class="author">
                                    <div>
                                        <h5>24 Apr 2025</h5>
                                        <h5>by <a href="#" class="text-decoration-line-bottom">Olivia Dan</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/blog/5.jpg" class="img-fluid" alt="">
                                <div class="cat">Management</div>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Investment management</a></h4>
                                <p>Lorem ipsum quisque sodales miss the varius rana duru fermen.</p>
                                <div class="author">
                                    <div>
                                        <h5>23 Apr 2025</h5>
                                        <h5>by <a href="#" class="text-decoration-line-bottom">Arla Brown</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/blog/6.jpg" class="img-fluid" alt="">
                                <div class="cat">Industrial</div>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Know about industrial laws</a></h4>
                                <p>Lorem ipsum quisque sodales miss the varius rana duru fermen.</p>
                                <div class="author">
                                    <div>
                                        <h5>21 Apr 2025</h5>
                                        <h5>by <a href="#" class="text-decoration-line-bottom">Micheal White</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get in touch -->
    <section class="call">
        <div class="background bg-img bg-fixed section-padding" data-background="img/slider/12.jpg" data-overlay-dark="3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title text-white mb-0">All people are equal before the law. <span>A good attorney</span> is what makes a difference.</div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-12">
                        <div class="call-center">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="text">
                                <p>Get in touch</p> <a href="tel:1234567890">123 456 7890</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include ("includes/footer.inc.php"); ?>