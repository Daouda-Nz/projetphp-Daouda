<?php
require_once "classes/Interfaces.php";
require_once "classes/Personne.php";
require_once "classes/Utilisateur.php";
require_once "classes/Client.php";
require_once "classes/Employe.php";
require_once "classes/Administrateur.php";

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
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
    }

    h1 {
        text-align: center;
        padding: 20px;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .card {
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px) scale(1.02);
    }

    .title {
        font-size: 20px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .client { border-left: 5px solid #00ffcc; }
    .employe { border-left: 5px solid #ffd700; }
    .admin { border-left: 5px solid #ff4d4d; }
    .stats { border-left: 5px solid #00bfff; }

    .result {
        font-size: 14px;
        line-height: 1.6;
    }
</style>
</head>

<body>

<h1>🚀 Gestion des utilisateurs</h1>

<div class="container">

    <div class="card client">
        <div class="title">👤 Client</div>
        <div class="result">
            <?php
            echo $client->afficher() . "<br>";
            echo "Réduction: " . $client->calculerReduction(1000);
            ?>
        </div>
    </div>

    <div class="card employe">
        <div class="title">💼 Employé</div>
        <div class="result">
            <?php
            echo $employe->afficher() . "<br>";
            echo "Salaire annuel: " . $employe->calculerSalaireAnnuel();
            ?>
        </div>
    </div>

    <div class="card admin">
        <div class="title">🛠 Administrateur</div>
        <div class="result">
            <?php
            echo $admin->afficher() . "<br>";
            echo $admin->supprimerUtilisateur();
            ?>
        </div>
    </div>

    <div class="card stats">
        <div class="title">📊 Statistiques</div>
        <div class="result">
            <?php
            echo "Nombre utilisateurs: " . Utilisateur::afficherNombre();
            ?>
        </div>
    </div>

</div>

</body>
</html>