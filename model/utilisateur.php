<?php
class utilisateur{
    private $id;
    private $nom;
    private $prenom;
    private $login;
    private $mdp;
    private $adresse;
    private $cp;
    private $ville;
    private $datembauche;
    
    public function __construct($id,$nom,$prenom,$login,$mdp,$adresse,$cp,$ville,$datembauche){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->login=$login;
        $this->mdp=$mdp;
        $this->adresse=$adresse;
        $this->cp=$cp;
        $this->ville=$ville;
        $this->datembauche=$datembauche;
    }
}