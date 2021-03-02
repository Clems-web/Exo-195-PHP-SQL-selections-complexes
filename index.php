<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>



<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.


try {
    $server = "localhost";
    $db = "exo_194";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



/* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
// TODO votre code ici.
    $stmt = $pdo->prepare("SELECT * from exo_194.user WHERE nom='Conor'");
    $state = $stmt->execute();
    if ($state) {
        foreach ($stmt->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
// TODO Votre code ici.
    $stmt2 = $pdo->prepare("SELECT * from exo_194.user WHERE prenom!='John'");
    $state2 = $stmt2->execute();
    if ($state2) {
        foreach ($stmt2->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
// TODO Votre code ici.
    $stmt3 = $pdo->prepare("SELECT * from exo_194.user WHERE id<=2");
    $state3 = $stmt3->execute();
    if ($state3) {
        foreach ($stmt3->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
// TODO Votre code ici.
    $stmt4 = $pdo->prepare("SELECT * from exo_194.user WHERE id>=2");
    $state4 = $stmt4->execute();
    if ($state4) {
        foreach ($stmt4->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
// TODO Votre code ici.
    $stmt5 = $pdo->prepare("SELECT * from exo_194.user WHERE id=1");
    $state5 = $stmt5->execute();
    if ($state5) {
        foreach ($stmt5->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
// TODO Votre code ici.
    $stmt6 = $pdo->prepare("SELECT * from exo_194.user WHERE id > 1 AND nom='Doe'");
    $state6 = $stmt6->execute();
    if ($state6) {
        foreach ($stmt6->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
// TODO Votre code ici.
    $stmt7 = $pdo->prepare("SELECT * from exo_194.user WHERE prenom='John' AND nom='Doe'");
    $state7 = $stmt7->execute();
    if ($state7) {
        foreach ($stmt7->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
// TODO Votre code ici.
    $stmt8 = $pdo->prepare("SELECT * from exo_194.user WHERE nom='Conor' OR prenom='Jane'");
    $state8 = $stmt8->execute();
    if ($state8) {
        foreach ($stmt8->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats */
// TODO Votre code ici.
    $stmt9 = $pdo->prepare("SELECT * from exo_194.user LIMIT 2");
    $state9 = $stmt9->execute();
    if ($state9) {
        foreach ($stmt9->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement */
// TODO Votre code ici.
    $stmt10 = $pdo->prepare("SELECT * from exo_194.user ORDER BY id ASC LIMIT 1");
    $state10 = $stmt10->execute();
    if ($state10) {
        foreach ($stmt10->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )*/
// TODO Votre code ici.
    $stmt11 = $pdo->prepare("SELECT * from exo_194.user WHERE nom LIKE 'C___r'");
    $state11 = $stmt11->execute();
    if ($state11) {
        foreach ($stmt11->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
// TODO Votre code ici.
    $stmt12 = $pdo->prepare("SELECT * from exo_194.user WHERE nom LIKE '%e%'");
    $state12 = $stmt12->execute();
    if ($state12) {
        foreach ($stmt12->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' */
// TODO Votre code ici.
    $stmt13 = $pdo->prepare("SELECT * from exo_194.user WHERE user.prenom IN ('John', 'Sarah')");
    $state13 = $stmt13->execute();
    if ($state13) {
        foreach ($stmt13->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }
/* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
// TODO Votre code ici.
    $stmt14 = $pdo->prepare("SELECT * from exo_194.user WHERE id BETWEEN 2 AND 4");
    $state14 = $stmt14->execute();
    if ($state14) {
        foreach ($stmt14->fetchAll() as $user) {
            echo "<div class='divUser'>Utilisateur : ". $user['nom']." ".$user['prenom']." ".$user['numero']." ".$user['rue']." ".$user['code_postal']." ".$user['ville']." ".$user['pays']." ".$user['mail']."</div>";
        }
    }

}
catch (PDOException $exception) {
    echo $exception->getMessage();
}
?>


</body>
</html>
