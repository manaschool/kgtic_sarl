<?php

//--------------------- lien pour les images 88732230809
$url_image="https://akila.blog/@ressouce/mg_etablissement/"; // lien des images des articles
$lien_logo ="https://akila.blog/@ressouce/logo_site/";        // lien du logo de l'entreprise
$logo_partenaire="https://akila.blog/@ressouce/logo_site/";   // lien des logos des partenaire
$photo_equipe="https://akila.blog/@ressouce/photo_membrer/";  // lien des image des membres
// $matricule_entreprise="1011121121";
$matricule_entreprise="654b7262c7d05";

//===== recuper les tous les articles =====
if(isset($_GET['mat_categori'])){
    $mat_categori=$_GET['mat_categori'];
    recupProduitCategorie($mat_categori);
    $obj_tous_post= recupProduitCategorie($mat_categori);  // recuper les articles d'une d'une categories
}else{
    
    $obj_tous_post= recup_article(); // recuper tous les les articles
}
//==== fin de recuperation==========

//===== recuper le detail de l'articles articles =====
if(isset($_GET['matricule_post'])){
    $mat_post= strip_tags(trim($_GET['matricule_post'])); // matricule de l'article
    $obj= recup_detail_post($mat_post);
    if (empty($obj)) {
        header("location: ../");
    }
}

//==== fin de recuperation==========

//===== recuper toutes les categories des articles =====
$categories= recup_category();
//==== fin de recuperation==========

//===== Affiches les vues d'un Articles ===== //$matricule_post = matricule de l'articles
  // vues_posts($matricule_post);
//==== fin de recuperation========== 

//===== Affiches les vues d'un Articles ===== // $matricule_cat = matricule de la categorie
  // info_cat_post($matricule_cat);
//==== fin de recuperation========== 

//===== Recuper les information de l'administrateur ===== // $matricule_admin = matricule de la administrateur
  // info_admin($matricule_admin); 
//==== fin de recuperation==========

//===== Conter les articles d'une categorie ===== // $mat_cat = matricule de la categorie
    //count_produit_cat($mat_cat)
//==== fin de recuperation========== 

//===== Recuper les produit de la meme categories ===== // $mat_categori = matricule de la categorie
 //recupProduitCategorie($mat_categori);
//==== fin de recuperation========== 

//===== Recuper les info de l'entreprises ===== 
 $info_entreprise =info_entreprise();
//==== fin de recuperation========== info_partenaire()

//===== les vues sur un articles===== 
  // vues_posts($matricule_post);
//==== fin de recuperation========== info_equipe

//===== les vues sur un articles===== 
  $partenaire = info_partenaire();
//==== fin de recuperation==========

//===== les vues sur un articles===== 
$equipe = info_equipe();
//==== fin de recuperation==========



//===================================================================================================================================
//---------------------- Recuper tous les posts
function recup_article(){
    global $matricule_entreprise;

  $url="https://akila.blog/api_text/api_new/articles/$matricule_entreprise";

  $options = array(
   'http' => array(
     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
     'method'  => 'POST',
    //  'content' => http_build_query($data)
   )
  );
  $context  = stream_context_create($options);
  $result= file_get_contents($url, false);
  $obj_tous_post = json_decode($result);
  if ($obj_tous_post === FALSE) { /* Handle error */ }
  // var_dump($categories);
  return  $obj_tous_post;
}


//--------------------------- requete pour recuper les categories

function recup_category(){
    global $matricule_entreprise;
  $url_visiteur= "https://akila.blog/api_text/api_new/categorie_vues";
  
  $data = array( 
             'matricule_entreprise' =>  $matricule_entreprise, 
             );
  
  // utilisez 'http' même si vous envoyez la requête sur https:// ...
  $options = array(
   'http' => array(
     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
     'method'  => 'POST',
     'content' => http_build_query($data)
   )
  );
  $context  = stream_context_create($options);
  $result= file_get_contents($url_visiteur, false, $context);
  $categories = json_decode($result);
  if ($categories === FALSE) { /* Handle error */ }
  // var_dump($categories);

  return  $categories;
}




//====== function qui permet de de recuper tous les matricule des categories des produits ==========================
function recup_mat_cat(){
    global $obj_tous_post;
    $recup_mat_cat=[];
    foreach($obj_tous_post as $value){
        $recup_mat_cat[]= $value->id_categorie;
    }
    return $recup_mat_cat;
}
//-------------------------fin

//====================fonction qui permet de recuper les donnees sur la boutique ==================== equipe
function info_entreprise(){
  global $matricule_entreprise;
  $fields = [
      "matricule_entreprise" => $matricule_entreprise, //---------------------
  ];
  $postdata = http_build_query($fields);
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api_text/api_new/info_entreprise');
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  
  $info_entreprise = json_decode($result);
  //-- verifie si les informtion recupé ne sont pas vide
  if (isset($info_entreprise)) {
      return $info_entreprise[0];
      // var_dump($produits[0]->nom_art);
  }else{
      
  }
  //--- fin 
}

//====================fonction qui recuper les partenaire de l'entreprise ====================
function info_partenaire(){
  global $matricule_entreprise;
  $fields = [
      "matricule_entreprise" => $matricule_entreprise, //---------------------
  ];
  $postdata = http_build_query($fields);
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api_text/api_new/info_partenaire');
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  
  $info_partenaire = json_decode($result);
  //-- verifie si les informtion recupé ne sont pas vide
  if (isset($info_partenaire)) {
      return $info_partenaire;
      // var_dump($produits[0]->nom_art);
  }else{
      
  }
  //--- fin 
}

//==================== fonction qui recuper les membres de l'equipe de l'entreprise l'entreprise ====================
function info_equipe(){
  global $matricule_entreprise;
  $fields = [
      "matricule_entreprise" => $matricule_entreprise, //---------------------
  ];
  $postdata = http_build_query($fields);
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api_text/api_new/equipe');
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  
  $equipe = json_decode($result);
  //-- verifie si les informtion recupé ne sont pas vide
  if (isset($equipe)) {
      return $equipe;
      // var_dump($produits[0]->nom_art);
  }else{
      
  }
  //--- fin 
}



//========================= function principal ======================================

//----------- affiche le detail d'un post
function recup_detail_post($mat_post){
  global $matricule_entreprise;
  $obj='';
  if(isset($mat_post)) {
    $matricule_post=$mat_post;
    
    $url="https://akila.blog/api_text/api_new/articles/$matricule_entreprise/$matricule_post"; //---enligne

    $data= file_get_contents($url);
    $ob_blog=json_decode($data);
    // var_dump($ob_blog);
    if(empty($ob_blog)) {
        // header("location: ../blog");
    } else {
        // $obj= json_decode($data);
        $obj=$ob_blog;
    } 

  }
  return  $obj;

}

//------------------------------fonction pour afficher les vues sur les posts

function vues_posts($matricule_post){ 

  $url_vues= "https://akila.blog/api_text/api_new/categorie_vues";
  
  $data1 = array( 
             'matricule_post' => $matricule_post, 
             );
  
  // utilisez 'http' même si vous envoyez la requête sur https:// ...
  $options = array(
   'http' => array(
     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
     'method'  => 'POST',
     'content' => http_build_query($data1)
   )
  );
  $context  = stream_context_create($options);
  $result= file_get_contents($url_vues, false, $context);
  $vues = json_decode($result);
  if ($vues === FALSE) { /* Handle error */ }
  // var_dump($vues);
  return $vues;
}

//--------------------------- fin 

//--------------------------- requete pour afficher les elements d'une categores

function info_cat_post($matricule_cat){ //---requete pour afficher les elements d'une categores

  $url_vues= "https://akila.blog/api_text/api_new/categorie_vues";
  
  $data1 = array( 
             'matricule_cat' => $matricule_cat, 
             );
  
  // utilisez 'http' même si vous envoyez la requête sur https:// ...
  $options = array(
   'http' => array(
     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
     'method'  => 'POST',
     'content' => http_build_query($data1)
   )
  );
  $context  = stream_context_create($options);
  $result= file_get_contents($url_vues, false, $context);
  $info_categorie = json_decode($result);
  if ($info_categorie === FALSE) { /* Handle error */ }
  // var_dump($vues);
  return $info_categorie[0];
}

//--------------------------- fin 
//=----------------------fonction qui recuper les administrateur du blog
function info_admin($matricule_admin){ 

  $url= "https://akila.blog/api_text/api_new/categorie_vues";
  
  $data = array( 
             'mat_admin' => $matricule_admin, 
             );
  
  // utilisez 'http' même si vous envoyez la requête sur https:// ...
  $options = array(
   'http' => array(
     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
     'method'  => 'POST',
     'content' => http_build_query($data)
   )
  );
  $context  = stream_context_create($options);
  $result= file_get_contents($url, false, $context);

  $info_admin = json_decode($result);
  if ($info_admin === FALSE) { /* Handle error */ }
  // var_dump($info_admin);
  return $info_admin;
}
//--------------------------- fin 

//=============== Function qui permet d'afficher le nombre de produits par categorie================================
function count_produit_cat($mat_cat) {

    $array=recup_mat_cat();
    $nbr = array();
    $nbr = count(array_keys($array,$mat_cat));
    return $nbr;
    
}
//--------------------fin

//=== fonction qui recuper tous les produits ayant la meme categories============

function recupProduitCategorie($mat_categori){
    $artticles_cat=[];
    $data= recup_article();
    foreach($data as $value){
        if($value->id_categorie == $mat_categori){
            $artticles_cat[]=$value;
        }
    }
    return $artticles_cat;
}




// var_dump(info_partenaire());



