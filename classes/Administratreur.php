<?php
require_once "Interfaces.php";
require_once "Utilisateur.php";

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