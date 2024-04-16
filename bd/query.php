<?php 
  function prenPage()
  {
      
  //On recupère le nom de la page dans laquelle nous sommes
  $url = $_SERVER['PHP_SELF'];//ceci renvoit le chemin de la page depuis la racine du site ex: /manaschool/index.php

  $reg = '#^(.+[\\\/])*([^\\\/]+)$#';
  $nom_page = preg_replace($reg, '$2', $url);//ceci renvoit uniquement le nom du fichier ex index.php

  return $nom_page;
  }
