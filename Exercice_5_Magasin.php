<!-- 5 - En ce qui concerne les repas, les magasins ne disposent pas toutes d'un restaurant d'entreprise. 
Les employés se trouvant dans les magasins qui n'ont pas de restaurant d'entreprise bénéficient en contrepartie de tickets restaurants. 
Chaque magasin dispose donc de son propre mode de restauration.
Modifier la classe Magasin pour gérer ce mode de restauration.
Afficher chaque mode de restauration de chaque employé selon le magasin dans lequel il est affecté.  -->


<?php

class Magasin {
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $modeRestauration;

    public function __construct($nom, $adresse, $codePostal, $ville, $modeRestauration) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->modeRestauration = $modeRestauration;
    }

    // Getter pour le mode de restauration
    public function getModeRestauration() {
        return $this->modeRestauration;
    }

    // Getters/setters Magasin
    
    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function getAdresse() {
        return $this->adresse;
    }
    
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    
    public function getCodePostal() {
        return $this->codePostal;
    }
    
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }
    
    public function getVille() {
        return $this->ville;
    }
    
    public function setVille($ville) {
        $this->ville = $ville;
    }
}

class Employe {
    private $nom;
    private $salaireAnnuel;
    private $anciennete;
    private $magasin;

    public function __construct($nom, $salaireAnnuel, $anciennete, $magasin) {
        $this->nom = $nom;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->anciennete = $anciennete;
        $this->magasin = $magasin;
    }

    public function getModeRestauration() {
        return $this->magasin->getModeRestauration();
    }

    // Getters/setters Employe
    
    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function getSalaireAnnuel() {
        return $this->salaireAnnuel;
    }
    
    public function setSalaireAnnuel($salaireAnnuel) {
        $this->salaireAnnuel = $salaireAnnuel;
    }
    
    public function getAnciennete() {
        return $this->anciennete;
    }
    
    public function setAnciennete($anciennete) {
        $this->anciennete = $anciennete;
    }
    
    public function getMagasin() {
        return $this->magasin;
    }

    public function setMagasin($magasin) {
        return $this->magasin = $magasin;
    } 
}

$magasin1 = new Magasin("Magasin A", "123 Rue du radis", "75000", "Paris", "Restaurant d'entreprise");
$magasin2 = new Magasin("Magasin B", "456 Rue de la courgette", "69000", "Lyon", "Tickets restaurants");

$employe1 = new Employe("Jean", 30000, 5, $magasin1);
$employe2 = new Employe("Marie", 35000, 3, $magasin2);

// Afficher le mode de restauration de chaque employé
echo $employe1->getNom() . " du " . $magasin1->getNom() . " bénificie du mode restauration suivant : " . $employe1->getModeRestauration() . "<br>" ;// Affiche "Restaurant d'entreprise"
echo $employe2->getNom() . " du " . $magasin2->getNom() . " bénificie du mode restauration suivant : " . $employe2->getModeRestauration() . "<br>" ;// Affiche "Tickets restaurants"

?>