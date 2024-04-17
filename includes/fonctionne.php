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
 function remplace_table($data){
    $table_balise="<table";
    $table_raplace="<table class='table table-bordered border-primary table-striped table-hover' ";
    $table= str_replace($table_balise, $table_raplace,$data);
    return $table;

}
}