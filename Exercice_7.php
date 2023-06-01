<!-- 7 - Chaque année, des chèques Noël sont distribués aux enfants des employés. Le montant du chèque Noël dépend de l'âge des enfants :

    20 € pour les enfants de 0 à 10 ans,
    30 € pour les enfants de 11 à 15 ans,
    50 € pour les enfants de 16 à 18 ans.

Modifier le programme afin de gérer l'attribution des chèques Noël aux enfants des salariés.
Afficher si l'employé a le droit d'avoir des chèques Noël (Oui/Non). Pour ce faire, établir les conditions nécessaires dans le programme.
Si la réponse est Oui, afficher combien de chèques de chaque montant sera distribué à l'employé.
Si aucun chèque n'est distribué pour une tranche d'âge, ne pas afficher. -->

<?php

class Employee {
    private $nom;
    private $age;
    private $enfant;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
        $this->enfant = [];
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function ajoutEnfant($age) {
        $this->enfant[] = $age;
    }

    public function aChequesNoel() {
        return count($this->enfant) > 0;
    }

    public function distributeCheques() {
        $montantCheques = [
            "0-10" => 20,
            "11-15" => 30,
            "16-18" => 50
        ];

        $nbrCheques = [
            "0-10" => 0,
            "11-15" => 0,
            "16-18" => 0
        ];

        foreach ($this->enfant as $ageEnfant) {
            if ($ageEnfant >= 0 && $ageEnfant <= 10) {
                $nbrCheques["0-10"]++;
            } elseif ($ageEnfant >= 11 && $ageEnfant <= 15) {
                $nbrCheques["11-15"]++;
            } elseif ($ageEnfant >= 16 && $ageEnfant <= 18) {
                $nbrCheques["16-18"]++;
            }
        }
        return $nbrCheques;
    }
}


// Employé
$employee = new Employee("Henry Dupond", 20);

// Ajout des enfants de l'employé avec leurs âges respectifs
$employee->ajoutEnfant(8);
$employee->ajoutEnfant(13);
$employee->ajoutEnfant(16);
$employee->ajoutEnfant(20);

// Vérification si l'employé a le droit d'avoir des chèques Noël
if ($employee->aChequesNoel()) {
    echo "L'employé " . $employee->getNom() . " a droit aux chèques Noël. <br>";
    $nbrCheques = $employee->distributeCheques();

    // Affichage des chèques distribués
    if ($nbrCheques["0-10"] > 0) {
        echo "Nombre de chèques d'un montant de 20 € pour les enfants de 0 à 10 ans : " . $nbrCheques["0-10"] . "<br>";
    }
    if ($nbrCheques["11-15"] > 0) {
        echo "Nombre de chèques d'un montant de 30 € pour les enfants de 11 à 15 ans : " . $nbrCheques["11-15"] . "<br>";
    }
    if ($nbrCheques["16-18"] > 0) {
        echo "Nombre de chèques d'un montant de 50 € pour les enfants de 16 à 18 ans : " . $nbrCheques["16-18"] . "<br>";
    }
} else {
    echo "L'employé " . $employee->getNom() . " ne peut avoir de chèques de Noël.<br>";
}


?>