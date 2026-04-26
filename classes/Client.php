<?php
require_once __DIR__ . "/Interfaces.php";
require_once __DIR__ . "/Personne.php";

class Client extends Utilisateur {

    const TAUX_SIMPLE = 0.05;
    const TAUX_PREMIUM = 0.15;

    private $typeClient;

    public function __construct($id, $nom, $email, $login, $motDePasse, $typeClient) {
        parent::__construct($id, $nom, $email, $login, $motDePasse);
        $this->typeClient = $typeClient;
    }

    public function calculerReduction($montant) {
        return $this->typeClient == "premium"
            ? $montant * self::TAUX_PREMIUM
            : $montant * self::TAUX_SIMPLE;
    }

    public function afficherInfos() {
        return parent::afficherInfos() . ", Type: $this->typeClient";
    }

    public function afficherRole() {
        return "Client";
    }

    public function afficher() {
        return $this->afficherInfos();
    }
}