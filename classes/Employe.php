<?php

class Employe extends Utilisateur {

    private $salaire;

    public function __construct($id, $nom, $email, $login, $motDePasse, $salaire) {
        parent::__construct($id, $nom, $email, $login, $motDePasse);
        $this->salaire = $salaire;
    }

    public function calculerSalaireAnnuel() {
        return $this->salaire * 12;
    }

    public function afficherRole() {
        return "Employé";
    }

    public function afficher() {
        return $this->afficherInfos() . ", Salaire: $this->salaire";
    }
}