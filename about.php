<?php
    require_once ("conn/conn.php");
    include ("includes/header.inc.php");
    include ("includes/nav.inc.php");
?>

    <!-- Header Banner -->
    <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?= PROOT; ?>assets/media/slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-60 text-center">
                    <h6><div class="icon"><i class="flaticon-courthouse"></i></div> Who are we</h6>
                    <h1>About <span>Law Firm</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> About law firm
                    </div>
                    <div class="section-title">We are here to fight against <span>any violance</span></div>
                    <p>Lawyer sit amet risus ac duin auctor posuere fanish amet the acinia lecratusan risus facilis semper etiam fermen. Lorem ipsum amet quam miss nestibulum drana fermen.</p>
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
                    </ul>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="year-box vert-move">
                            <div class="number">20</div>
                            <div class="txt">Years of experience</div>
                            <div class="number-bg"></div>
                        </div> <img src="<?= PROOT; ?>assets/media/about-01.jpg" class="img-fluid" alt="">
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
                <div class="col-lg-5 col-md-12 animate-box" data-animate-effect="fadeInLeft"> <img class="img" src="<?= PROOT; ?>assets/media/about-02.jpg" alt=""> </div>
                <div class="col-lg-5 offset-lg-1 col-md-12 animate-box" data-animate-effect="fadeInRight">
                    <div class="section-subtitle text-white">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> People make the difference
                    </div>
                    <div class="section-title white">We here for provide <span>legal consultancy</span></div>
                    <p>All people are equal before the law. A good attorney is what makes a difference. Lorem aliquam sit amet auctor the done vitae risus duise in the miss ranish fermen.</p>
                    <div class="about-bottom mt-30"> <img src="<?= PROOT; ?>assets/media/signature.svg" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-rol">President & Co-Founder</div>
                            <div class="about-name">Gabora H. Asamoah</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients section-padding">
        <div class="container">
            <div class="row">
               <div class="col-md-12 mb-30 text-center">
                   <div class="section-subtitle">
                        <div class="icon"><i class="flaticon-courthouse"></i></div> Our Successes
                    </div>
                    <div class="section-title">Awards <span>&</span> Recognitions</div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 text-center">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="<?= PROOT; ?>assets/media/awards/01.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="<?= PROOT; ?>assets/media/awards/02.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="<?= PROOT; ?>assets/media/awards/03.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="<?= PROOT; ?>assets/media/awards/04.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <section class="section-padding video-wrapper video bg-img bg-fixed" data-overlay-dark="5" data-background="<?= PROOT; ?>assets/media/slider/2.jpg">
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
                            <div class="img"> <img src="<?= PROOT; ?>assets/media/team/1.jpg" alt="" class="img-cover">
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
                            <div class="img"> <img src="<?= PROOT; ?>assets/media/team/2.jpg" alt="" class="img-cover">
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
                            <div class="img"> <img src="<?= PROOT; ?>assets/media/team/3.jpg" alt="" class="img-cover">
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
                            <div class="img"> <img src="<?= PROOT; ?>assets/media/team/4.jpg" alt="" class="img-cover">
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
    <!-- Get in touch -->
    <section class="call">
        <div class="background bg-img bg-fixed section-padding" data-background="<?= PROOT; ?>assets/media/slider/12.jpg" data-overlay-dark="3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title text-white mb-0">All people are equal before the law. <span>A good attorney</span> is what makes a difference.</div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-12">
                        <div class="call-center">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="text">
                                <p>Get in touch</p> <a href="tel:1234567890">00 000 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include ("includes/footer.inc.php"); ?>