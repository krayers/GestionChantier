<?php
    require_once("modele/modele.php");

    function selectLesDossier()
    {
      //appel de la fonction select les profs du modele
      $lesDossier= selectAllDossier();

      //eventuellement faire des controles sur les donnees
      return $lesDossier;
    }
?>
