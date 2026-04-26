<?php
require_once "Interfaces.php";
class Personne {
    protected $id;
    protected $nom;
    protected $email;

    public function __construct($id, $nom, $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
    }

    public function afficherInfos() {
        return "ID: $this->id, Nom: $this->nom, Email: $this->email";
    }
}