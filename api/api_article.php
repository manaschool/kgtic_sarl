<?php
$url_image="https://akila.blog/@ressouce/mg_etablissement/"; // lien des images des articles
// $matricule_entreprise="654b7262c7d05";

//===== recuper les tous les articles =====
if(isset($_GET['mat_categori'])){
    $mat_categori=$_GET['mat_categori'];
    recupProduitCategorie($mat_categori);
    $obj_tous_post= recupProduitCategorie($mat_categori);  // recuper les articles d'une d'une categories
}else{
    
    $obj_tous_post= recup_article(); // recuper tous les les articles
}
//==== fin de recuperation==========

//===================================================================================================================================
//---------------------- Recuper tous les posts
function recup_article(){
    global $matricule_entreprise;

  $url="https://akila.blog/api/articles/$matricule_entreprise";

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

