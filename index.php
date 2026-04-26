<?php
require_once "classes/Interfaces.php";
require_once "classes/Personne.php";
require_once "classes/Utilisateur.php";
require_once "classes/Client.php";
require_once "classes/Employe.php";
require_once "classes/Administrateur.php";

// TEST
$client = new Client(1, "Ali", "ali@mail.com", "ali123", "pass", "premium");
$employe = new Employe(2, "Jean", "jean@mail.com", "jean", "pass", 2000);
$admin = new Administrateur(3, "Admin", "admin@mail.com", "admin", "pass");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des utilisateurs</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #4facfe, #00f2fe);
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: white;
        margin-bottom: 30px;
    }

    .container {
        max-width: 700px;
        margin: auto;
    }

    .card {
        background: white;
        padding: 20px;
        margin: 15px 0;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.03);
    }

    .title {
        font-weight: bold;
        margin-bottom: 10px;
        color: #007bff;
        font-size: 18px;
    }

    .result {
        color: #333;
    }
</style>
</head>

<body>

<h2>Gestion des utilisateurs</h2>

<div class="container">

    <div class="card">
        <div class="title">Client</div>
        <div class="result">
            <?php
            echo $client->afficher() . "<br>";
            echo "Réduction: " . $client->calculerReduction(1000);
            ?>
        </div>
    </div>

    <div class="card">
        <div class="title">Employé</div>
        <div class="result">
            <?php
            echo $employe->afficher() . "<br>";
            echo "Salaire annuel: " . $employe->calculerSalaireAnnuel();
            ?>
        </div>
    </div>

    <div class="card">
        <div class="title">Administrateur</div>
        <div class="result">
            <?php
            echo $admin->afficher() . "<br>";
            echo $admin->supprimerUtilisateur();
            ?>
        </div>
    </div>

    <div class="card">
        <div class="title">Statistiques</div>
        <div class="result">
            <?php
            echo "Nombre utilisateurs: " . Utilisateur::afficherNombre();
            ?>
        </div>
    </div>

</div>

</body>
</html>