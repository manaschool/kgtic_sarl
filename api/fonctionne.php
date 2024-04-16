<?php 
function affichage_img($chemin,$image){
    if(!empty($image)){
     if (!filter_var($image, FILTER_VALIDATE_URL) === false) {
        $img=$image;
      } else {
        $img=$chemin . $image;
          }
    return $img;    
 }
}