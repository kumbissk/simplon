<?php
session_start();

use Brief\models\Entreprise;

require '../models/Entreprise.php';



function getAllEntreprise(){
    $entreprise = new Entreprise();
    $_SESSION['all']=$entreprise->Allentreprise();
    // header('location:../entreprises/liste');
}


/**
 * Cette fonction permet de creer une entreprise
 * @return void
 */
function addEntreprises(){
    //Creation de l'entreprise
            $entreprise = new Entreprise();
            $entreprise->setIdEntreprise($_POST['nom']);
            $entreprise->setSiege($_POST['siege']);
            $entreprise->setTelephone($_POST['telephone']);
            $entreprise->setDateCreation($_POST['dateCreation']);
            $entreprise->setRegistre($_POST['registre']);
            $entreprise->setNinea($_POST['ninea']);
            $entreprise->setSiteWeb($_POST['siteWeb']);
            $entreprise->setDispositifFormation($_POST['dispositifFormation']);
            $entreprise->setOrganigramme($_POST['organigramme']);
            $entreprise->setContrat($_POST['contrat']);

            $_SESSION['all'] = $entreprise->Allentreprise();
            // header('location:../entreprises/liste');
    }
    
?>