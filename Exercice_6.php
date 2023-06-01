<!-- L'entreprise souhaite intégrer dans ce système informatique les activités du comité d'entreprise. 
Des chèques-vacances sont distribués aux employés à condition que ceux-ci aient une ancienneté d'au moins un an.
Modifier la classe Employe afin de savoir si celui-ci peut disposer de chèques-vacances ou non. -->

<?php

class Employe {
    private $nom;
    private $salaireAnnuel;
    private $anciennete;
   

    public function __construct($nom, $salaireAnnuel, $anciennete) {
        $this->nom = $nom;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->anciennete = $anciennete;
        
    }

    public function peutAvoirChequesVacances() {
        return $this->anciennete >= 1;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getSalaireAnnuel() {
        return $this->salaireAnnuel;
    }
  
}

$employe1 = new Employe("Jean", 30000, 5);
$employe2 = new Employe("Marie", 35000, 3);


if ($employe1->peutAvoirChequesVacances()) {
    echo $employe1->getNom() . " peut disposer de chèques-vacances.<br>";
} else {
    echo $employe1->getNom() . " ne peut pas disposer de chèques-vacances.<br>";
}

if ($employe2->peutAvoirChequesVacances()) {
    echo $employe2->getNom() . " peut disposer de chèques-vacances.<br>";
} else {
    echo $employe2->getNom() . " ne peut pas disposer de chèques-vacances.<br>";
}
