<?php
require_once _DIR_ . "/Interfaces.php";
require_once _DIR_ . "/Personne.php";

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