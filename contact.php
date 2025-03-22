<?php
    require_once ("conn/conn.php");
    include ("includes/header.inc.php");
    include ("includes/nav.inc.php");
?>

     <!-- Header Banner -->
     <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?= PROOT; ?>assets/media//slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-60 text-center">
                    <h6><div class="icon"><i class="flaticon-courthouse"></i></div> Get in touch</h6>
                    <h1>Contact <span>Info</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="info-box section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-subtitle"><div class="icon"><i class="flaticon-courthouse"></i></div> Get in touch</div>
                    <div class="section-title">Do you need help? <span>Contact with us now!</span></div>
                    <div class="item"> <i class="icon fa-regular fa-location-dot"></i>
                        <div class="cont">
                            <h5>Address</h5>
                            <p>0665 McKeown KSI, 10001 GH</p>
                        </div>
                    </div>
                    <div class="item"> <i class="icon fa-solid fa-phone"></i>
                        <div class="cont">
                            <h5>Phone</h5>
                            <p><a href="tel:+11235678910">+233 00 000 0000</a></p>
                        </div>
                    </div>
                    <div class="item"> <i class="icon fa-regular fa-envelope"></i>
                        <div class="cont">
                            <h5>e-Mail</h5>
                            <p>legal@gabora.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="contact-form">
                        <form method="post">
                           <h3>Contact with us <span>now!</span></h3>
                           <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" placeholder="Full Name" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" placeholder="E-mail Address" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="40" rows="4" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="button-3"><a href="#0"><span>Send Message</span></a></button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get in touch -->
    <section class="call">
        <div class="background bg-img bg-fixed section-padding" data-background="<?= PROOT; ?>assets/media//slider/12.jpg" data-overlay-dark="3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title text-white mb-0">All people are equal before the law. <span>A good attorney</span> is what makes a difference.</div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-12">
                        <div class="call-center">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="text">
                                <p>Get in touch</p> <a href="tel:1234567890">233 000 000 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include ("includes/footer.inc.php"); ?>