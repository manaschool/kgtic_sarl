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
        
            $image1 = affichage_img($image_banniere,$banniere1);
            $image2 = affichage_img($image_banniere,$banniere2);
            $image3 = affichage_img($image_banniere,$banniere3);


        $nbimg = rand(1,3);
        // var_dump($nbimg);
        
        
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
            background-image: url("<?= !empty($img) ?  $img :'assets/img/banner/banner-1.jpg' ?>");
            /* background-attachment: fixed;
            background-size: cover;
            background-position: center center;
            position: relative;
            overflow: hidden;
            padding: 65px 0 70px; */
            }
    </style>
    <title>Acceuil - KEMESSEN GLOBAL TRADING AND INDUSTRIES COMPANY SARL</title>

    <link rel="icon" type="image/png" href="<?=$lien_logo . $logo?>">
</head>

<body>
<?php include "includes/header.php" ?>

    <div class="banner-area">
        <div class="container">
            <div class="banner-slider owl-carousel owl-theme pb-100">
                <div class="slider-item">
                    <span><?= $description_baniere1 ?></span>
                    <h1><?= $titre_banniere1 ?></h1>
                    <div class="banner-btn">
                        <a href="contact" class="default-btn">Contactez nous !<span></span></a>
                    </div>
                </div>
                <div class="slider-item">
                    <span><?= $description_baniere2 ?></span>
                    <h1><?= $titre_banniere2 ?></h1>
                    <div class="banner-btn">
                        <a href="contact" class="default-btn">Contactez nous !<span></span></a>
                    </div>
                </div>
                <div class="slider-item">
                    <span><?= $description_baniere3 ?></span>
                    <h1><?= $titre_banniere3 ?></h1>
                    <div class="banner-btn">
                        <a href="contact" class="default-btn">Contactez nous !<span></span></a>
                    </div>
                </div>
            </div>

            <div class="banner-card-contant">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-market-research marked"></i>
                            <h3><?=$titre_s1 ?></h3>
                            <p><?=$discription_s1 ?></p>
                            <div class="card-btn">
                                <a href="services">Services<i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-effective marked"></i>
                            <h3><?=$titre_s2?></h3>
                            <p><?=$discription_s2 ?></p>
                            <div class="card-btn">
                                <a href="service">Services <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-testing marked"></i>
                            <h3><?=$titre_s3 ?></h3>
                            <p><?=$discription_s3 ?></p>
                            <div class="card-btn">
                                <a href="service">Services <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php /* <div class="col-lg-3 col-sm-6">
                        <div class="features-card">
                            <i class="flaticon-creative marked"></i>
                            <h3>Creative Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="card-btn">
                                <a href="#">Read More <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> */?>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area ptb-100">
       <?php include "includes/about-area.php" ?>
    </div>


    <div class="offer-area bg-color pt-100 pb-50">
        <?php include "includes/offer-area.php" ?>
    </div>


    <div class="support-and-team">
        <div class="container-fluid">
            <div class="row no-gutters">
                <?php foreach ($offres as $key=>$offre ) :?>
                    <style>
                        .best-support.img-<?= $key ?> {
                            /* assets/img/support-bg.jpg */
                            background-image: url("<?= $Lien_image_offres . $offre-> img_banniere ?>");
                        }
                    </style>
                    <?php if($offre->page_vente =='oui' AND $offre->publie==2): ?>
                    <?php if($key<2):?>
                        <div class="col-lg-6">
                            <div class="best-support img-<?= $key?>">
                                <div class="support-text">
                                    <span>Meilleurs services</span>
                                    <h2><?= $offre->titre ?></h2>
                                    <div class="support-btn">
                                        <a href="<?=$offre->telephone_lien?>" class="default-btn">
                                            <?= $offre->text_bouton ?>
                                            <i class="las la-arrow-right"></i>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: break; endif;?>
                    <?php endif; endforeach; ?>


                <?php /*<div class="col-lg-6">
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
                </div> */?>

            </div>
        </div>
    </div>

    <div class="choose-area bg-color pt-100 pb-70">
       <?php include "includes/choose-area.php" ?>
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

    <!-- team-area -->
    <?php include "includes/team-area.php"?>
    <!-- team-area -->


    <div class="testimonials-and-faq bg-color">
        <div class="container-fluid">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6">
                    <div class="testimonials-content ptb-50">
                        <div class="testimonials-text">
                            <div class="section-title-two">
                                <span>Témoignages</span>
                                <h2>La vraie mesure de la valeur de toute entreprise est sa performance.</h2>
                            </div>
                            <div class="testimonials-slider owl-carousel owl-theme">
                                <div class="slider-item">
                                    <div class="title">
                                        <h4>Support client</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>Je suis impressionné par le travail votre. Il a su répondre à mes besoins de manière efficace et rapide. Son expertise et son attention aux détails ont vraiment fait la différence.</p>
                                    <div class="clients">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image">
                                        <h3>Johan Mendel</h3>
                                        <span>Manager Of LTd</span>
                                    </div>
                                </div>

                                <div class="slider-item">
                                    <div class="title">
                                        <h4>Soutien à l'équipe</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>Je tiens à remercier chaleureusement la personne pour son excellent travail. Grâce à ses compétences et à son engagement, j'ai pu obtenir les résultats que je recherchais.</p>
                                    <div class="clients">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image">
                                        <h3>Mendela Alina</h3>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>

                                <div class="slider-item">
                                    <div class="title">
                                        <h4>Support aléatoire</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>Je suis très satisfait du service que j'ai reçu de la part de vos services.</p>
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
                                <span>Nos services </span>
                                <h2><?= $titre_service ?></h2>
                            </div>
                            <div class="faq-accordion">
                                <ul class="accordion">
                                <?php foreach($services as $key=>$service): ?>
                                    <?php if($key<3): ?>
                                        <li>
                                            <h3 class="title"><?= $service-> nom ?></h3>
                                            <div class="accordion-content">
                                                <p><?= $service->description ?></p>
                                            </div>
                                        </li>
                                    <?php else: break; endif ?>
                                <?php endforeach ?>

                                    <?php /*<li>
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
                                    </li> */?>

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
                <h2>Nos dernières nouvelles</h2>
                <p>Economics and information technology. This is the main factor that sets us apart from our competition and allows us to grow to deliver a specialist business consultancy service.</p>
            </div>
            <div class="row">
                <?php foreach($obj_tous_post as $key=>$value ): ?>
                    <?php if($key<3): ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="<?=$url_image . $value->photo ?>" alt="Image">
                                    </a>
                                    <div class="caption">
                                        <!-- <h4>20</h4> -->
                                        <p><?= $value->date ?></p>
                                    </div>
                                </div>
                                <div class="blog-text">
                                    <h3><a href="blog-details/<?=titre($value->titre)?>-<?=$value->matricule?>"><?= $value->titre ?></a></h3>
                                    <p><?= strTextLent($value->content, 20) ?></p>
                                    <div class="blog-btn">
                                        <a href="blog-details">Explore <i class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <?php else: break; endif ?>
                <?php endforeach ?>

                <?php /*<div class="col-lg-4 col-md-6">
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
                </div> */?>

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