<?php

require_once "classes/Client.php";
require_once "classes/Employe.php";
require_once "classes/Administrateur.php";

// TEST

$client = new Client(1, "Ali", "ali@mail.com", "ali123", "pass", "premium");
$employe = new Employe(2, "Jean", "jean@mail.com", "jean", "pass", 2000);
$admin = new Administrateur(3, "Admin", "admin@mail.com", "admin", "pass");

echo $client->afficher() . "<br>";
echo "Réduction: " . $client->calculerReduction(1000) . "<br><br>";

echo $employe->afficher() . "<br>";
echo "Salaire annuel: " . $employe->calculerSalaireAnnuel() . "<br><br>";

echo $admin->afficher() . "<br>";
echo $admin->supprimerUtilisateur() . "<br><br>";

echo "Nombre utilisateurs: " . Utilisateur::afficherNombre();