       <?php $imagea_about = affichage_img($image_banniere, $image_about ); ?> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <div class="video-box">
                            <img src="<?= !empty($imagea_about) ? $imagea_about :"assets/img/about-1.jpg" ?>" alt="image">
                            <a class="video-btn popup-youtube">
                                <!-- <i class="flaticon-play-video"></i> -->
                            </a>
                            <?php /*<a href="hhttps://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
                                <i class="flaticon-play-video"></i>
                            </a>*/?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text pl-30">
                        <div class="section-title-two">
                            <span>À propos de notre entreprise</span>
                           <?= $apropos_entreprise ?>
                        </div>
                       
                        <div class="about-btn">
                            <a href="about" class="default-btn">Lire plus ... <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>