<?php

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