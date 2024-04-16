<?php include "api/cle_api.php" ?>
<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ajol/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 16:50:31 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/dark.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        <?php 
        $i=round(1,3);
            $image1 = affichage_img($image_banniere,@$dataEntreprise->about_image1);
            $image2 = affichage_img($image_banniere,@$dataEntreprise->banniere_image2);
            $image3 = affichage_img($image_banniere,@$dataEntreprise->banniere_image3);


        $nbimg = round(1,3);
        
        if($nbimg==1):
            $img= $image1;
        elseif($nbimg==2 AND !empty($image2)):
            $img= $image2;
        elseif($nbimg==3 AND !empty($image3)):
            $img = $image3;
        else:
            $img= 'assets/img/banner/banner-1.jpg';
        endif;
   ?>

        .banner-area {
            background-image: url("<?=  $img ?>");
            /* background-attachment: fixed;
            background-size: cover;
            background-position: center center;
            position: relative;
            overflow: hidden;
            padding: 65px 0 70px; */
            }
    </style>
    <title>Acceuil - KEMESSEN GLOBAL TRADING AND INDUSTRIES COMPANY SARL</title>

    <link rel="icon" type="image/png" href="<?=$lien_logo . $info_header->logo?>">
</head>

<body>
<?php include "includes/header.php" ?>

    <div class="banner-area">
        <div class="container">
            <div class="banner-slider owl-carousel owl-theme pb-100">
                <div class="slider-item">
                    <span><?= $dataEntreprise->d_baniere1 ?></span>
                    <h1><?= $dataEntreprise->t_baniere1 ?></h1>
                    <div class="banner-btn">
                        <a href="contact" class="default-btn">Contactez nous !<span></span></a>
                    </div>
                </div>
                <div class="slider-item">
                    <span><?= $dataEntreprise->d_baniere2 ?></span>
                    <h1><?= $dataEntreprise->t_baniere2 ?></h1>
                    <div class="banner-btn">
                        <a href="contact" class="default-btn">Contactez nous !<span></span></a>
                    </div>
                </div>
                <div class="slider-item">
                    <span><?= $dataEntreprise->d_baniere3 ?></span>
                    <h1><?= $dataEntreprise->t_baniere3 ?></h1>
                    <div class="banner-btn">
                        <a href="contact" class="default-btn">Contactez nous !<span></span></a>
                    </div>
                </div>
            </div>

            <div class="banner-card-contant">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-market-research marked"></i>
                            <h3>Market Research</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="card-btn">
                                <a href="#">Read More <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-effective marked"></i>
                            <h3>Product Analysis</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="card-btn">
                                <a href="#">Read More <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-testing marked"></i>
                            <h3>Perfect Testing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="card-btn">
                                <a href="#">Read More <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-creative marked"></i>
                            <h3>Creative Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="card-btn">
                                <a href="#">Read More <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <div class="video-box">
                            <img src="assets/img/about-1.jpg" alt="image">
                            <a href="hhttps://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
                                <i class="flaticon-play-video"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text pl-30">
                        <div class="section-title-two">
                            <span>About Us</span>
                            <h2>We Integrate Intelligent Ideas & Method To Deliver Solutions</h2>
                            <p>There are many variations of passages of Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized then words which don't look even slightly believable.</p>
                        </div>
                        <ul>
                            <li>
                                <i class="las la-check"></i>
                                Quia voluptas sit aspernatur autodit aut fugit quia cons quntur
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Vitae dicta sunt explicabo nemo enim ipsay voluptatem
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Ipsa quae ab illo inventore veritatis quasi architecto beatae
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Magni dolores eosy qui ratione voluptatem ipsum
                            </li>
                        </ul>
                        <div class="about-btn">
                            <a href="#" class="default-btn">Read More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="offer-area bg-color pt-100 pb-50">
        <div class="container">
            <div class="section-title">
                <span>What We Offer</span>
                <h2>We Integrate Intelligent Ideas Method</h2>
                <p>Economics and information technology. This is the main factor that sets us apart from our competition and allows us to grow to deliver a specialist business consultancy service.</p>
            </div>
            <div class="row mt-20">
                <div class="col-lg-4 col-sm-6">
                    <div class="offer-card bg-1">
                        <i class="flaticon-new bg-white"></i>
                        <h3><a href="services-details.html">New Business Innovation</a></h3>
                        <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                        <div class="offer-btn">
                            <a href="services-details.html">Explore <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="offer-card bg-2">
                        <i class="flaticon-seo bg-white"></i>
                        <h3><a href="services-details.html">Web Design and Development</a></h3>
                        <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                        <div class="offer-btn">
                            <a href="services-details.html">Explore <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="offer-card bg-3">
                        <i class="flaticon-market-research bg-white"></i>
                        <h3><a href="services-details.html">User Experience and UI Design</a></h3>
                        <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                        <div class="offer-btn">
                            <a href="services-details.html">Explore <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="offer-card bg-4">
                        <i class="flaticon-bullhorn bg-white"></i>
                        <h3><a href="services-details.html">Marketing and Branding</a></h3>
                        <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                        <div class="offer-btn">
                            <a href="services-details.html">Explore <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="offer-card bg-5">
                        <i class="flaticon-secure bg-white"></i>
                        <h3><a href="services-details.html">Web Security and Support</a></h3>
                        <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                        <div class="offer-btn">
                            <a href="services-details.html">Explore <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="offer-card bg-6">
                        <i class="flaticon-stats bg-white"></i>
                        <h3><a href="services-details.html">Search Engine Optimization</a></h3>
                        <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                        <div class="offer-btn">
                            <a href="services-details.html">Explore <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="support-and-team">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="best-support">
                        <div class="support-text">
                            <span>Best Support</span>
                            <h2>We Are Innovative and Creative</h2>
                            <div class="support-btn">
                                <a href="#" class="default-btn">
                                    Get A Consulting
                                    <i class="las la-arrow-right"></i>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="best-support team">
                        <div class="support-text">
                            <span>Experienced Team</span>
                            <h2>We Have Best Experienced Team</h2>
                            <div class="support-btn">
                                <a href="#" class="default-btn two">
                                    Get A Consulting
                                    <i class="las la-arrow-right"></i>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="assets/img/shape/shape-15.png" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="choose-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="choose-content pb-100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-text">
                            <div class="section-title-two">
                                <span>Why Choose Us</span>
                                <h2>We are Hard Worker & Meet Client Needs Ensuring Quality</h2>
                                <p>You want results. We have found that the best way to get them is with upfront research – of your company, competitors, target market, and customer Only after we fully understand you and your customers.</p>
                            </div>
                            <div class="choose-card">
                                <i class="flaticon-key-to-success"></i>
                                <h3>Attention to Details & A Plan for Success</h3>
                                <p>You want results. We have found that the best way to get them is with upfront research – of your company, competitors, target</p>
                            </div>
                            <div class="choose-card">
                                <i class="flaticon-data-scientist"></i>
                                <h3>We are Creative, Experts & Our Flexible Pricing</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-img">
                            <img src="assets/img/choose.jpg" alt="Image">
                            <?php /*<div class="caption">
                                <h3><span class="odometer" data-count="200">00</span>+</h3>
                                <p>Successful<br> Project</p>
                            </div> */?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fun-fact-content">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="fun-fact-card">
                            <div class="count">
                                <i class="flaticon-project-management"></i>
                                <h3><span class="odometer" data-count="<?=$info_header->mention1  ?>">00</span>+</h3>
                            </div>
                            <span class="span"><?= $info_header->mention_titre1 ?></span>
                            <?php /*<p><?=$info_header->mention_des  ?>.</p> */?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="fun-fact-card">
                            <div class="count">
                                <i class="flaticon-diploma"></i>
                                <h3><span class="odometer" data-count="<?=$info_header->mention2 ?>">00</span>+</h3>
                            </div>
                            <span class="span"><?= $info_header->mention_titre2 ?></span>
                            <?php /*<p><?= $info_header->mention_des2 ?>.</p> */?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="fun-fact-card">
                            <div class="count">
                                <i class="flaticon-success"></i>
                                <h3><span class="odometer" data-count="<?=$info_header->mention3 ?>">00</span>+</h3>
                            </div>
                            <span class="span"><?= $info_header->mention_titre3 ?></span>
                            <?php /*<p>On the other hand, we denounce and with righteous indignation.</p>*/?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="fun-fact-card">
                            <div class="count">
                                <i class="flaticon-medal"></i>
                                <h3><span class="odometer" data-count="<?=$info_header->mention4 ?>">00</span>+</h3>
                            </div>
                            <span class="span"><?= $info_header->mention_titre4 ?></span>
                            <?php /*<p>On the other hand, we denounce and with righteous indignation.</p>*/?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php /* <div class="case-study-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Case Study</span>
                <h2>Some Recent Projects We Have Done</h2>
                <p>Economics and information technology. This is the main factor that sets us apart from our competition and allows us to grow to deliver a specialist business consultancy service.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/case-study/case-study-1.jpg" alt="Image">
                        <div class="caption">
                            <h3>Product Analysis & Research</h3>
                            <div class="case-study-btn">
                                <a href="case-study-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/case-study/case-study-2.jpg" alt="Image">
                        <div class="caption">
                            <h3>New Business<br> Innovation</h3>
                            <div class="case-study-btn">
                                <a href="case-study-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/case-study/case-study-3.jpg" alt="Image">
                        <div class="caption">
                            <h3>Digital Marketing & Advertising</h3>
                            <div class="case-study-btn">
                                <a href="case-study-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/case-study/case-study-4.jpg" alt="Image">
                        <div class="caption">
                            <h3>UI/UX Design for<br> Ultrajon</h3>
                            <div class="case-study-btn">
                                <a href="case-study-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/case-study/case-study-5.jpg" alt="Image">
                        <div class="caption">
                            <h3>Web Development & Design</h3>
                            <div class="case-study-btn">
                                <a href="case-study-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/case-study/case-study-6.jpg" alt="Image">
                        <div class="caption">
                            <h3>Data Security &<br> Storage</h3>
                            <div class="case-study-btn">
                                <a href="case-study-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> */?>


    <div class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Team</span>
                <h2>Our Expert & Intelligent Team</h2>
                <p>Economics and information technology. This is the main factor that sets us apart from our competition and allows us to grow to deliver a specialist business consultancy service.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/team/team-1.jpg" alt="Image">
                        <div class="caption">
                            <ul class="social-link">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-youtube"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                            <h3>Mendela Alina</h3>
                            <p>CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-card">
                        <img src="assets/img/team/team-2.jpg" alt="Image">
                        <div class="caption">
                            <ul class="social-link">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-youtube"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                            <h3>Johan Smith</h3>
                            <p>Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="case-study-card">
                        <img src="assets/img/team/team-3.jpg" alt="Image">
                        <div class="caption">
                            <ul class="social-link">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-youtube"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                            <h3>Smithy Kerny</h3>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonials-and-faq bg-color">
        <div class="container-fluid">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6">
                    <div class="testimonials-content ptb-50">
                        <div class="testimonials-text">
                            <div class="section-title-two">
                                <span>Testimonials</span>
                                <h2>The True Measure of Value of Any Business is Performance</h2>
                            </div>
                            <div class="testimonials-slider owl-carousel owl-theme">
                                <div class="slider-item">
                                    <div class="title">
                                        <h4>Customer Support</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <div class="clients">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image">
                                        <h3>Johan Mendel</h3>
                                        <span>Manager Of LTd</span>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="title">
                                        <h4>Team Support</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <div class="clients">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image">
                                        <h3>Mendela Alina</h3>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="title">
                                        <h4>Random Support</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <div class="clients">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image">
                                        <h3>Johan Smith</h3>
                                        <span>Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content ptb-100">
                        <div class="faq-text">
                            <div class="section-title-two">
                                <span>Frequently Ask Question</span>
                                <h2>We are Hard Worker & Meet Client Needs Ensuring Quality</h2>
                            </div>
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li>
                                        <h3 class="title">Web Security and Data Analysis</h3>
                                        <div class="accordion-content">
                                            <p>There are many variations of passages of Ipsum available, but the majority have suffered alteration in some form, by the injected humor, or randomized words which don't look even here slightly data analysis believable.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="title">Market Research and Analysis</h3>
                                        <div class="accordion-content">
                                            <p>There are many variations of passages of Ipsum available, but the majority have suffered alteration in some form, by the injected humor, or randomized words which don't look even here slightly data analysis believable.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="title">Web Development and UI Design</h3>
                                        <div class="accordion-content">
                                            <p>There are many variations of passages of Ipsum available, but the majority have suffered alteration in some form, by the injected humor, or randomized words which don't look even here slightly data analysis believable.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="title">User Experience</h3>
                                        <div class="accordion-content">
                                            <p>There are many variations of passages of Ipsum available, but the majority have suffered alteration in some form, by the injected humor, or randomized words which don't look even here slightly data analysis believable.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="assets/img/shape/shape-13.png" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>News & Blog</span>
                <h2>Featured News & Blog</h2>
                <p>Economics and information technology. This is the main factor that sets us apart from our competition and allows us to grow to deliver a specialist business consultancy service.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-1.jpg" alt="Image">
                            </a>
                            <div class="caption">
                                <h4>20</h4>
                                <p>Nov</p>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="blog-details.html">Randomized Words Which Don't Look Even Slightly</a></h3>
                            <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                            <div class="blog-btn">
                                <a href="blog-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-2.jpg" alt="Image">
                            </a>
                            <div class="caption">
                                <h4>18</h4>
                                <p>Nov</p>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="blog-details.html">Make Benefit Through Invest by Your Money</a></h3>
                            <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                            <div class="blog-btn">
                                <a href="blog-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-3.jpg" alt="Image">
                            </a>
                            <div class="caption">
                                <h4>15</h4>
                                <p>Nov</p>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="blog-details.html">Informational Website Displaying Information</a></h3>
                            <p>There are many of passages of Lorem Ipsum available but the majority.</p>
                            <div class="blog-btn">
                                <a href="blog-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "includes/footer.php" ?>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/meanmenu.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/odometer.min.js"></script>

    <script src="assets/js/jquery.appear.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/ajol/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 16:50:32 GMT -->

</html>