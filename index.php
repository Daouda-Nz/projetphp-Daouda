<?php
class Personne {
    private $id;
    private $nom;
    private $email;

    public function __construct($id, $nom, $email) {
    $this->id = $id;
    $this->nom = $nom;
    $this->email = $email;
   }

   public function afficherInfos() {
    return "ID: " . $this->id . ", Nom: " . $this->nom . ", Email: " . $this->email;
    }

}

$p = new Personne(1, "Ali", "ali@mail.com");

echo $p->afficherInfos();

?>

