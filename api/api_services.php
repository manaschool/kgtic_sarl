<?php
$photo_equipe="https://akila.blog/@ressouce/photo_membrer/";  // lien des image des membres
// $matricule_entreprise="1011121121";
// $matricule_entreprise="654b7262c7d05"; 

//===== les vues sur un articles===== 
$services = recup_services();
//==== fin de recuperation==========

//==================== fonction qui recuper les membres de l'equipe de l'entreprise l'entreprise ====================
function recup_services(){
    global $matricule_entreprise;
    $fields = [
        "matricule_entreprise" => $matricule_entreprise, //---------------------
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api/services');
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
  