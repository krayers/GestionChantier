<?php
    require_once ("controleur/controleur.php");
?>
<html>
  <head>
    <title> Gestion de Francilienne de Peinture </title>
    <meta charset="utf-8">
  </head>
  <body>
    <center>
      <h1> Gestion de Dossiers </h1>
      <h3> Liste des Dossiers </h3>
      <?php

        $lesDossier= selectLesDossier();
        //appel de la vue
        include("vue/vue.php");

      ?>
    </center>
  </body>
</html>
