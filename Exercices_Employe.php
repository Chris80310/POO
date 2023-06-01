<?php

// La société Jarditou, d'envergure nationale, souhaite se doter d'un S.I.R.H. pour gérer ses employés dans les différents magasins à travers la France.

// 1 - Ecrire une classe Employe avec les informations (propriétés) suivantes :

//     Nom
//     Prénom
//     Date d'embauche dans l'entreprise
//     Fonction (Poste) dans l'entreprise
//     Salaire en K euros brut annuel
//     Service dans lequel se situe l'employé (Comptabilité, Commercial...)


class Employe
{
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;

    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($_nom)
    {
        return $this->_nom = $_nom;
    } 

    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($_prenom)
    {
        return $this->_prenom = $_prenom;
    }

    public function getDate()
    {
        return $this->_dateEmbauche;
    }
    public function setDate($_dateEmbauche)
    {
        return $this->_dateEmbauche= $_dateEmbauche;
    }

    public function getFonction()
    {
        return $this->_fonction;
    }
    public function setFonction($fonction)
    {
        $this->_fonction = $fonction;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }
    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function getService()
    {
        return $this->_service;
    }
    public function setService($service)
    {
        $this->_service = $service;
    }

// 2 - Dans la classe Employe, écrire une méthode permettant de savoir depuis combien d'années l'employé est dans l'entreprise.

    public function calculAnciennete()
    {
        $_dateEmbauche = new DateTime($this->_dateEmbauche);
        $today = new DateTime();
        $diff = $_dateEmbauche->diff($today);
        return $diff->format('%d jours, %m mois, %y années');
    }

// 3 - Chaque année, l'employé reçoit une prime calculée sur le salaire annuel (5% du brut) et sur l'ancienneté (2% du brut pour chaque année d'ancienneté). 
// Cette prime est versée au 30/11 de chaque année. Dans la classe Employe, écrire le(s) méthode(s) permettant de déduire le montant de cette prime et de 
// donner l'ordre de transfert à la banque le jour du versement.//
// L'ordre de transfert à la banque sera juste un message écrit spécifiant que l'ordre de transfert a été envoyé à la banque avec mention du montant.//
// Afin de tester les éléments ci-dessus, créer au minimum 5 objets Employe avec des informations sensiblement différentes. //
// Ecrire dans le programme principal l'affichage du montant des primes de chaque employé.//  
// La date du versement de la prime doit également être vérifiée. Pour tester, fixer cette date à la date du jour, 
//faire les conditions nécessaires dans le code et tester en changeant de date afin de voir si le message voulu s'affiche.


    private $salaireAnnuel;
    private $anciennete;
    
    public function __construct($nom, $salaireAnnuel, $anciennete) {
        $this->_nom = $nom;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->anciennete = $anciennete;
    }
    
    public function calculerPrime() {
        $primeSalaire = $this->salaireAnnuel * 0.05;
        $primeAnciennete = $this->salaireAnnuel * ($this->anciennete * 0.02);
        $primeTotale = $primeSalaire + $primeAnciennete;
        return $primeTotale;
    }
    
    public function genererOrdreTransfert() {
        $prime = $this->calculerPrime();
        $dateVersement = '30/11';
        $today = date('d/m');
        
        if ($today == $dateVersement) {
            return "L'ordre de transfert de $prime euros a été envoyé à la banque.";
        } else {
            return "La prime sera versée le $dateVersement.";
        }
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
}

// Création des employés
$employe1 = new Employe("Jean", 30000, 5);
$employe2 = new Employe("Marie", 40000, 3);
$employe3 = new Employe("Pierre", 25000, 8);
$employe4 = new Employe("Sophie", 35000, 2);
$employe5 = new Employe("Thomas", 28000, 6);

// Affichage des primes
$employes = [$employe1, $employe2, $employe3, $employe4, $employe5];

foreach ($employes as $employe) {
    echo "Employé : " . $employe->getNom() . "<br>";
    echo "Prime annuelle : " . $employe->calculerPrime() . " euros<br>";
    echo $employe->genererOrdreTransfert() . "<br><br>";
}

?>