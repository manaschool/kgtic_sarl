<?php 
//65707eb0c3041 //6561d3dd3bbf7 65c3e2b8e0756 
$matricule_entreprise = "65c3e2b8e0756 ";
include "api/api_info_entreprise.php";
include "api/api_header.php";
include "api/api_services.php";
include "api/fonctionne.php";
include "api/api_offres.php";
include "api/api_equipe.php";
include "api/api_article.php";

//=====informations du fichier api_header.php offres
$logo=$info_header->logo;
$page1_menu1=$info_header->page1;
$page_nemu2=$info_header->page2;
$page_nemu3=$info_header->page4;
$whatsapp= $info_header->whatsapp;
$telephone= $info_header->telephone;
$lien_facebook=$info_header->lien_fb;
$lien_twitter = $info_header->twitter;
$youtube=$info_header->youtube;
$instagram=$info_header->instagram;
$titre_service = $info_header->titre_service;
$titre_member = $info_header->titre_member;
$titre_page_blog= $info_header->titre_blog;

//=======information du fichier api_info_entreprise.php
$banniere1 = @$dataEntreprise->about_image1;
$banniere2 = @$dataEntreprise->banniere_image2;
$banniere3 = @$dataEntreprise->banniere_image3;
$titre_banniere1 = $dataEntreprise->t_baniere1;
$description_baniere1=$dataEntreprise->d_baniere1;

$titre_banniere2 = $dataEntreprise->t_baniere2;
$description_baniere2=$dataEntreprise->d_baniere2;

$titre_banniere3 = $dataEntreprise->t_baniere3;
$description_baniere3=$dataEntreprise->d_baniere3;

$titre_s1=$dataEntreprise->titre_s1;
$discription_s1 = $dataEntreprise->discription_s1;

$titre_s2=$dataEntreprise->titre_s2;
$discription_s2 = $dataEntreprise->description_s2;

$titre_s3=$dataEntreprise->titre_s3;
$discription_s3 = $dataEntreprise->description_s3;
$apropos_entreprise= $dataEntreprise->propos;

$motivation_titre = $dataEntreprise->motivation_titre;
$motivation_desription = $dataEntreprise->motivation_desription;

$image_about = $dataEntreprise->banniere_site1;
$motivation_img = $dataEntreprise->motivation_img;

//=== information sur les memebres : api_equipe



