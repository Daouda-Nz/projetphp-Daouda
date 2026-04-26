<?php
require_once __DIR__ . "/Interfaces.php";
require_once __DIR__ . "/Personne.php";

class Administrateur extends Utilisateur {

    public function supprimerUtilisateur() {
        return "Utilisateur supprimé.";
    }

    public function afficherRole() {
        return "Administrateur";
    }

    public function afficher() {
        return $this->afficherInfos();
    }
}