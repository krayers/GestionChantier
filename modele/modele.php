<?php

  function connexion ()
  {
    $pdo=null; //variable Locale
    try{
      $pdo = new PDO("mysql:host=localhost; dbname=GestionChantier","root","");
    }
    catch (PDOException $exp)
    {
      echo "Erreur de connexion à la base de données";
    }
    return $pdo;
  }

  function selectAllDossier()
{
    $pdo = connexion();
    if ($pdo != null) // appel de la FANNConnection
    {
      $requete = "select*from Dossier;";
      //Preparation de la requete
      $select = $pdo->prepare ($requete);
      //execution de la requete
      $select->execute();
      //extraction des enregistrements
      return $select->fetchAll();
    }
    else
    {
      return null;
    }
}

function NouveauDossier()
{
  $pdo = connexion();
  if ($pdo != null) // appel de la FANNConnection
  {
    $requete = "insert into Dossier values ();";
    //Preparation de la requete
    $select = $pdo->prepare ($requete);
    //execution de la requete
    $select->execute();
    //extraction des enregistrements
    return $select->fetchAll();
  }
  else
  {
    return null;
  }
}
