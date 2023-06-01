<!-- 4 - L'entreprise est constituée de magasins implantés sur tout le territoire français.
Un employé fait partie d'un (et un seul) magasin. Un magasin dispose d'un nom, d'une adresse, d'un code postal, d'une ville.
Ecrire une nouvelle classe Magasins qui contient tous ces éléments et modifier la classe Employe afin que celui-ci soit rattaché à un magasin.  -->

<?php

class Magasin {
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    
    public function __construct($nom, $adresse, $codePostal, $ville) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
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

$employe1 = new Employe("Jean", 30000, 5, "Carrefour");

echo "Employé : " . $employe1->getNom() . "<br>";
echo "Salaire annuel : " . $employe1->getSalaireAnnuel() . "<br>";
echo "Travaille depuis : " . $employe1->getAnciennete() . " ans chez " . $employe1->getMagasin() . "<br>";

?>


