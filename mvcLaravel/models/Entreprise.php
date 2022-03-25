<?php

namespace Brief\models;

use Brief\utils\Helper;
use PDOException;

require '../utils/Helper.php';

// use Gie\utils\Helper;


class Entreprise {

    private $id_entreprise;
    private $nom;
    private $siege;
    private $telephone;
    private $dateCreation;
    private $registre;
    private $ninea;
    private $siteWeb;
    private $dispositifFormation;
    private $organigramme;
    private $contrat;

    /**
    * @return mixed
    */
    public function getIdEntreprise()
    {
        return $this->id_entreprise;
    }


    /**
     * @param mixed $id_entreprise
     */
    public function setIdEntreprise($id_entreprise)
    {
        $this->id_entreprise = $id_entreprise;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function set($nom)
    {
        $this->nom = $nom;
    }

       /**
     * @return mixed
     */
    public function getSiege()
    {
        return $this->siege;
    }

    /**
     * @param mixed $siege
     */
    public function setSiege($siege)
    {
        $this->siege = $siege;
    }

    /**
     * @return mixed
    */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
    */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
    */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
    */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

       /**
     * @return mixed
    */
    public function getRegistre()
    {
        return $this->registre;
    }

    /**
     * @param mixed $registre
    */
    public function setRegistre($registre)
    {
        $this->registre = $registre;
    }

    /**
     * @return mixed
    */
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * @param mixed $ninea
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }


    /**
     * @return mixed
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * @param mixed $siteWeb
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;
    }

    /**
     * @return mixed
    */
    public function getDispositifFormation()
    {
        return $this->dispositifFormation;
    }

    /**
     * @param mixed $dispositifFormation
    */
    public function setDispositifFormation($dispositifFormation)
    {
        $this->dispositifFormation = $dispositifFormation;
    }

    /**
     * @return mixed
    */
    public function getOrganigramme()
    {
        return $this->organigramme;
    }

    /**
     * @param mixed $organigramme
    */
    public function setOrganigramme($organigramme)
    {
        $this->organigramme = $organigramme;
    }

    /**
     * @return mixed
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * @param mixed $contrat
    */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;
    }

    public function AllEntreprise(){
        $helper = Helper::getDatabaseConnexion();
        $requete = 'SELECT * FROM `Entreprises` '  ;
        $statement = $helper->query($requete);
        return $statement->fetchAll();
    }

    public function getAllEntreprise(){
        $helper = Helper::getDatabaseConnexion();
        $requete = 'SELECT * FROM `Entreprises` '  ;
        $statement = $helper->prepare($requete);
        $statement->execute(['$id_entreprise']);
        return $statement->fetch();
    }

    public function createEntreprise($nom, $siege, $telephone, $dateCreation, $registre, $ninea, $siteWeb, $dispositifFormation, $organigramme, $contrat){
       try {
            $helper = Helper::getDatabaseConnexion();
            $statement = "INSERT INTO `Entreprises` (nom, siege, telephone, dateCreation, registre, ninea, siteWeb, dispositifFormation, organigramme, contrat)
            VALUES ('$nom', '$siege', '$telephone', '$dateCreation', '$registre', '$ninea', '$siteWeb', '$dispositifFormation', '$organigramme', '$contrat')";
            $helper->exec($statement);
       } 
       
       catch (PDOException $e) {
        echo $statement . "<br/>" . $e->getMessage();
       }
    }



    

}




?>