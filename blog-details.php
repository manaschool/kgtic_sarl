<?php include "api/cle_api.php" ?>

<?php if (isset($_GET['mat_post']) AND !empty($_GET['mat_post'])) {
    $mat_post=$_GET['mat_post'];
    $detail_post = recup_detail_post($mat_post);
}else{
    header("location:home");

} 
print_r($detail_post);
?>

<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ajol/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 16:50:46 GMT -->

<head>
    <base href="../">
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
    <title>Ajol - Creative Agency Portfolio HTML Template</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-default">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>


    <?php include "includes/header.php" ?>

    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="las la-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="page-banner-area bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Single Blog</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="blog-details">
                            <div class="details-content">
                                <div class="preview-img">
                                    <img src="assets/img/blog/blog-details.jpg" alt="Image">
                                </div>
                                <ul class="list">
                                    <li>
                                        <i class="las la-calendar"></i>
                                        21 Jan 2020
                                    </li>
                                    <li>
                                        <i class="las la-user"></i>
                                        By - <a href="#">Admin</a>
                                    </li>
                                </ul>
                                <h2>Make Benefit Through Invest by Your Money</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut and aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in sed quia non numquamed eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                <div class="text-content-1">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <img src="assets/img/blog/blog-details-1.jpg" alt="Image">
                                        </div>
                                        <div class="col-lg-8">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-content-2">
                                    <i class="las la-quote-left"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veiam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea codo consequat. Duis aute irure dolor.</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                <div class="blog-img">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <img src="assets/img/blog/blog-1.jpg" alt="Image">
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <img src="assets/img/blog/blog-7.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <div class="share-content">
                                    <ul class="social-link">
                                        <li class="share">
                                            <i class="las la-share"></i>
                                            Share :
                                        </li>
                                        <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="lab la-youtube"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                    <ul class="tag-list">
                                        <li class="tag">
                                            <i class="las la-tag"></i>
                                            Tag :
                                        </li>
                                        <li><a href="#">#Agency,</a></li>
                                        <li><a href="#">#Portfolio</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-comment">
                                <h3>Comment</h3>
                                <div class="comment-content">
                                    <img class="img-1" src="assets/img/blog/comment-1.jpg" alt="Image">
                                    <h4>Jenthen Benther</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim.</p>
                                    <ul>
                                        <li><a href="#"><i class="las la-heart"></i>Likes</a></li>
                                        <li><a href="#"><i class="las la-share"></i>Reply</a></li>
                                        <li>01 Days ago</li>
                                    </ul>
                                    <div class="reply">
                                        <img src="assets/img/blog/comment-4.jpg" alt="Image">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Reply" placeholder="Write a Reply....">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <img class="img-1" src="assets/img/blog/comment-2.jpg" alt="Image">
                                    <h4>Sharlin Alina</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim.</p>
                                    <ul>
                                        <li><a href="#"><i class="las la-heart"></i>Likes</a></li>
                                        <li><a href="#"><i class="las la-share"></i>Reply</a></li>
                                        <li>11 Days ago</li>
                                    </ul>
                                </div>
                                <div class="comment-content">
                                    <img class="img-1" src="assets/img/blog/comment-3.jpg" alt="Image">
                                    <h4>Kerlos Bils</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim.</p>
                                    <ul>
                                        <li><a href="#"><i class="las la-heart"></i>Likes</a></li>
                                        <li><a href="#"><i class="las la-share"></i>Reply</a></li>
                                        <li>15 Days ago</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-contact bg-color">
                                <h2>Post A Comment</h2>
                                <div class="contact-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Name" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="form-btn">
                                            <button type="submit" class="default-btn">Post A Comment<span></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" class="search-field" placeholder="Enter Your Keyword...">
                                <button type="submit"><i class="las la-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget-about-me">
                            <h3 class="title">
                                <span>About Me</span>
                            </h3>
                            <img src="assets/img/about-me-1.jpg" alt="Image">
                            <p>Lorem quis bibendum auctor, nisi elit conse quat ipsum, nec sagittis sem nibh id elit.</p>
                            <a href="#">Read More <i class="las la-arrow-right"></i></a>
                        </div>
                        <div class="widget widget-post">
                            <h3 class="title"><span>Popular Post</span></h3>
                            <div class="popular-post">
                                <a href="#">
                                    <img src="assets/img/post-1.jpg" alt="Image">
                                </a>
                                <h4><a href="#">Lorem quis bibendum auct nisi elit conse.</a></h4>
                                <p>June 25, 2020</p>
                            </div>
                            <div class="popular-post">
                                <a href="#">
                                    <img src="assets/img/post-2.jpg" alt="Image">
                                </a>
                                <h4><a href="#">Lorem quis bibendum auct nisi elit conse.</a></h4>
                                <p>June 26, 2020</p>
                            </div>
                            <div class="popular-post">
                                <a href="#">
                                    <img src="assets/img/post-3.jpg" alt="Image">
                                </a>
                                <h4><a href="#">Lorem quis bibendum auct nisi elit conse.</a></h4>
                                <p>June 27, 2020</p>
                            </div>
                            <div class="popular-post">
                                <a href="#">
                                    <img src="assets/img/post-4.jpg" alt="Image">
                                </a>
                                <h4><a href="#">Lorem quis bibendum auct nisi elit conse.</a></h4>
                                <p>June 28, 2020</p>
                            </div>
                        </div>
                        <div class="widget widget-categories">
                            <h3 class="title"><span>Categories</span></h3>
                            <ul class="categories-list">
                                <li><a href="#">Branding<span>27</span></a></li>
                                <li><a href="#">Design<span>07</span></a></li>
                                <li><a href="#">UI UX<span>31</span></a></li>
                                <li><a href="#">Web Development<span>05</span></a></li>
                                <li><a href="#">Digital Marketing<span>14</span></a></li>
                                <li><a href="#">SEO<span>06</span></a></li>
                                <li><a href="#">Branding Design<span>32</span></a></li>
                                <li><a href="#">Blog UI<span>19</span></a></li>
                            </ul>
                        </div>
                        <div class="widget widget-tags">
                            <h3 class="title"><span>Tags Cloud</span></h3>
                            <ul class="tags">
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <div class="widget widget-follow-on">
                            <h3 class="title"><span>Follow On</span></h3>
                            <ul class="social-link">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-youtube"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget widget-text">
                            <i class="las la-quote-left"></i>
                            <p> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit nibh vulputate.</p>
                        </div>
                        <div class="widget widget-categories">
                            <h3 class="title"><span>Archive</span></h3>
                            <ul class="categories-list">
                                <li><a href="#">Branding<span>27</span></a></li>
                                <li><a href="#">Design<span>07</span></a></li>
                                <li><a href="#">UI UX<span>31</span></a></li>
                                <li><a href="#">Web Development<span>05</span></a></li>
                                <li><a href="#">Digital Marketing<span>14</span></a></li>
                                <li><a href="#">SEO<span>06</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include "includes/footer.php" ?>


    <div class="go-top">
        <i class="las la-hand-point-up"></i>
    </div>


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

<!-- Mirrored from templates.hibootstrap.com/ajol/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 16:50:48 GMT -->

</html>