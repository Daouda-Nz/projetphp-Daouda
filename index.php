<?php

// 🔹 Interface Authentifiable
interface Authentifiable {
    public function seConnecter();
}

// 🔹 Interface Affichable
interface Affichable {
    public function afficher();
}

// 🔹 Classe Personne
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

// 🔹 Classe abstraite Utilisateur
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

// 🔹 Classe Client
class Client extends Utilisateur {

    const TAUX_SIMPLE = 0.05;
    const TAUX_PREMIUM = 0.15;

    private $typeClient;

    public function __construct($id, $nom, $email, $login, $motDePasse, $typeClient) {
        parent::__construct($id, $nom, $email, $login, $motDePasse);
        $this->typeClient = $typeClient;
    }

    public function calculerReduction($montant) {
        if ($this->typeClient == "premium") {
            return $montant * self::TAUX_PREMIUM;
        }
        return $montant * self::TAUX_SIMPLE;
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

// 🔹 Classe Employe
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

// 🔹 Classe Administrateur
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

// 🔹 Polymorphisme
function afficherUtilisateur(Affichable $u) {
    echo $u->afficher() . "<br>";
}

// 🔥 TESTS

$client = new Client(1, "Ali", "ali@mail.com", "ali123", "pass", "premium");
$employe = new Employe(2, "Jean", "jean@mail.com", "jean123", "pass", 2000);
$admin = new Administrateur(3, "Admin", "admin@mail.com", "admin", "pass");

echo $client->seConnecter() . "<br>";
echo "Réduction: " . $client->calculerReduction(1000) . "<br>";

echo $employe->seConnecter() . "<br>";
echo "Salaire annuel: " . $employe->calculerSalaireAnnuel() . "<br>";

echo $admin->supprimerUtilisateur() . "<br>";

afficherUtilisateur($client);
afficherUtilisateur($employe);
afficherUtilisateur($admin);

echo "<br>Nombre utilisateurs: " . Utilisateur::afficherNombre();

?>