<?php

abstract class Utilisateur extends Personne implements Authentifiable, Affichable {

    protected $login;
    protected $motDePasse;

    public static $nombreUtilisateurs = 0;

    public function __construct($id, $nom, $email, $login, $motDePasse) {
        parent::__construct($id, $nom, $email);
        $this->login = $login;
        $this->motDePasse = $motDePasse;
        self::$nombreUtilisateurs++;
    }

    public function seConnecter() {
        return "Utilisateur $this->login connecté.";
    }

    public static function afficherNombre() {
        return self::$nombreUtilisateurs;
    }

    abstract public function afficherRole();
}