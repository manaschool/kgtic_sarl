        <div class="container">
            <div class="section-title">
                <span>Ce que nous offrons</span>
                <h2><?= $titre_service ?></h2>
                <p>Économie et technologie de l'information. C'est le principal facteur qui nous distingue de nos concurrents et nous permet de croître pour offrir un service de conseil en entreprise spécialisé.</p>
            </div>

            <div class="row mt-20">
                <?php foreach($services as $key=>$service): ?>
                    <style>
                        <?php $image_service = !empty(affichage_img($img_service,$service->image))? affichage_img($img_service,$service->image) :'assets/img/offer/offer-1.jpg' ?>
                        .offer-card.bg-<?= $key?> {
                            background-image: url("<?= $image_service ?>");
                        }
                    </style>
                    <div class="col-lg-4 col-sm-6">
                        <div class="offer-card bg-<?= $key?>">
                            <i class="flaticon-new bg-white"></i>
                            <h3><a href="services-details.html"><?= $service-> nom ?></a></h3>
                            <p><?= strTextLent($service->description,50) ?></p>
                            <div class="offer-btn">
                                <a href="services-details.html">Explore <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <?php /*<div class="col-lg-4 col-sm-6">
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
                */?>


            </div>
        </div>