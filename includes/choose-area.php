<div class="container">
            <?php $image_motivation = affichage_img( $image_banniere,$motivation_img ); ?> 
            <div class="choose-content pb-100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-text">
                            <div class="section-title-two">
                                <span>Pourquoi nous choisir</span>
                                <!-- Nous sommes des travailleurs acharnés et répondons aux besoins des clients en garantissant la qualité. -->
                                <h2><?= $motivation_titre ?></h2>
                                <?php if(!empty($motivation_desription)): ?>
                                    <?= $motivation_desription ?>
                                <?php else: ?>
                                    <p>
                                    Pour obtenir des résultats concluants, il est essentiel de mener des recherches approfondies. Cela implique une analyse minutieuse de votre entreprise, de vos concurrents, de votre marché cible et de vos clients. 
                                    
                                    En comprenant pleinement votre entreprise et vos clients, nous pouvons identifier les tendances du marché et les besoins émergents des consommateurs, ce qui peut nous conférer un avantage concurrentiel.

                                    En comprenant mieux votre public cible, nous serons en mesure de personnaliser vos produits ou services pour répondre à leurs attentes de manière plus efficace. Ces recherches approfondies constituent donc un pilier essentiel pour orienter nos actions et garantir le succès de vos projets.


                                    </p>
                                <?php endif; ?>
                              
                            </div>

                            <?php /*<div class="choose-card">
                                <i class="flaticon-key-to-success"></i>
                                <h3>Attention to Details & A Plan for Success</h3>
                                <p>You want results. We have found that the best way to get them is with upfront research – of your company, competitors, target</p>
                            </div>

                            <div class="choose-card">
                                <i class="flaticon-data-scientist"></i>
                                <h3>We are Creative, Experts & Our Flexible Pricing</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div> */?>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-img">
                            <img src="<?= !empty($image_motivation) ? $image_motivation :"assets/img/choose.jpg " ?> " alt="Image">
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