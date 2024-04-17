<?php include "bd/query.php" ?>
<style>
     .ba{
            width: 6rem;
            border-radius: 20%;
        }

        .b{
            width: 3rem;
            border-radius: 10%;
        }
</style>
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


    <header class="header-area fixed-top">

        <div class="top-header">
            <div class="container">
                <div class="header-content">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="location">
                                <i class="las la-map-marker-alt"></i>
                                <span><?=$info_header->quartier.', '.$info_header->ville.', '.$info_header->region ?></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-alignment">
                                <ul class="socials-link">
                                    <li>Suivez-nous :</li>
                                    <?php if(!empty($lien_facebook)): ?>
                                        <li><a href="<?= $lien_facebook?>"><i class="lab la-facebook-f"></i></a></li>
                                    <?php endif ?>
                                    <?php if(!empty($lien_twitter)): ?>
                                        <li><a href="<?= $lien_twitter ?>"><i class="lab la-twitter"></i></a></li>
                                    <?php endif ?>
                                    <?php if(!empty($youtube)): ?>
                                        <li><a href="<?= $youtube ?>"><i class="lab la-youtube"></i></a></li>
                                    <?php endif ?>
                                    <?php if(!empty($instagram)): ?>
                                        <li><a href="<?= $instagram ?>"><i class="lab la-instagram"></i></a></li>
                                    <?php endif ?>
                                </ul>
                                <ul class="flag-area">
                                    <li class="flag-item-top">
                                        <a href="#" class="flag-bar">
                                            <span>Language</span>
                                            <i class="las la-angle-down"></i>
                                        </a>
                                        <ul class="flag-item-bottom">
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="assets/img/flag/arab.png" alt="Image">
                                                    العربيّة
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="assets/img/flag/germany.png" alt="Image">
                                                    Deutsch
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="assets/img/flag/portugal.png" alt="Image">
                                                    󠁥󠁮󠁧󠁿Português
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="assets/img/flag/china.png" alt="Image">
                                                    简体中文
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> 
                                <ul class="search-item">
                                    <li>
                                        <a href="javascript:void(0)" class="search-box">
                                            <i class="las la-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="home">
                                <img src="<?=$lien_logo . $logo?>" class="main-logo b" alt="image">
                                <img src="<?=$lien_logo . $logo?>" class="white-logo b" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="home">
                            <img src="<?=$lien_logo . $logo?>" class="ba" alt="image">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                
                                <li class="nav-item">
                                    <a href="home" class="nav-link <?= prenPage()=='index.php' ? 'active':'' ?>">
                                        <?=!empty($page_nemu1) ?$page_nemu1 :"Accueil" ?>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="about" class="nav-link <?= prenPage()=='about.php' ? 'active':'' ?>">
                                        A propos
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="services" class="nav-link <?= prenPage()=='services.php' ? 'active':'' ?>">
                                    <?=!empty($page_nemu2) ?$page_nemu2 :"Service" ?>    
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="contact" class="nav-link <?= prenPage()=='contact.php' ? 'active':'' ?>">
                                        <?=!empty($page_nemu3) ? $page_nemu3 :"Contact" ?>  
                                    </a>
                                </li>
                            </ul>
                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <div class="support">
                                        <i class="las la-headset"></i>
                                        <p>Contactez nous !</p>
                                        <a href="tel:<?=$whatsapp?>"><?= $telephone ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>


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
