<table border=1>
<tr><td> Reference Dossier </td> <td> Nom Assure </td> <td>Prenom Assure</td>
<td> Ville Assure </td><td> Adresse </td><td> Tel Fixe </td><td> Tel Portable </td><td> Email </td>
<td> Pays assure</td> <td> Date debut dossier</td><td> Civilité </td><td> Montant Franchise</td>
<td> Importance </td></tr>
<?php
    foreach($lesDossier as $unDossier)
    {
    echo "<tr> <td>".$unDossier['referenceD']."</td>
               <td>".$unDossier['nomassure']."</td>
               <td>".$unDossier['prenomassure']."</td>
               <td>".$unDossier['villeassure']."</td>
               <td>".$unDossier['adreesseassure']."</td>
               <td>".$unDossier['Tel_fixe_assure']."</td>
               <td>".$unDossier['tel_portable_assure']."</td>
               <td>".$unDossier['email']."</td>
               <td>".$unDossier['paysassure']."</td>
               <td>".$unDossier['dateDossierDeb']."</td>
               <td>".$unDossier['civilite']."</td>
               <td>".$unDossier['montant_de_franchise']."</td>
               <td>".$unDossier['importance']."</td>
                </tr>";
    }
?>
</table>
