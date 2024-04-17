<?php if(sizeof($equipe)>0): ?>
        <div class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Notre equipe</span>
                    <h2><?= $titre_member ?></h2>
                    <p>Notre équipe qualifiée pour vous servir, Chacun de nos membres est choisi avec soin pour ses compétences et son expérience dans son domaine d'expertise.</p>
                </div>
                <div class="row">
                    <?php foreach($equipe as $keys => $value): ?>
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="case-study-card">
                                <img src="<?= $photo_equipe. $value-> photo_memb  ?>" class="img-fluid" alt="Image">
                                <div class="caption">
                                    <ul class="social-link">
                                        <?php if(!empty($value->lien_fb)): ?>
                                            <li><a href="<?= $value->lien_fb ?>" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                        <?php  endif ?>

                                        <?php if(!empty($value->lien_link)): ?>
                                            <li><a href="<?= $value->lien_link ?>" target="_blank"><i class="lab la-linkedin"></i></a></li>
                                        <?php  endif ?>

                                        <?php if(!empty($value->lien_twit)): ?>
                                            <li><a href="<?= $value->lien_twit?>" target="_blank"><i class="lab la-twitter"></i></a></li>
                                        <?php  endif ?>
                                        
                                    </ul>
                                    <h3><?=$value-> nom.' '. $value->prenom ?></h3>
                                    <p><?= $value->poste  ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ;?>
    
                    <?php /*<div class="col-lg-4 col-md-6">
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
    
                    <div class="col-lg-4 col-md-6 offset-md-3        offset-lg-0">
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
                    </div> */?>
    
                </div>
            </div>
        </div>
    <?php endif ?>