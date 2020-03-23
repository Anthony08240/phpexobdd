<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php</title>
</head>
<body>

<a href="index.php">retour</a>
<?php
     // on se connecte à notre base
     $server = "db5000303615.hosting-data.io";
     $dbname = "dbs296602";
     $user = "dbu526395";
     $pass = "PaPef:5F";
 
     try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass,$pdo_options);


        // On recupere tout le contenu de la table news
        $reponse = $bdd->query('SELECT nom_cinema,ville_cinema,adresse_cinema,mail_cinema,telephone_cinema FROM cinema');

// On affiche le resultat
        while ($donnees = $reponse->fetch()){
            //On affiche les données dans le tableau
            echo "</tr>";
            echo "<td> <center>$donnees[nom_cinema] </center> </td><br>";
            echo "<td> <center> $donnees[ville_cinema] </center> </td><br>";
            echo "<td> <center>$donnees[adresse_cinema] </center> </td><br>";
            echo "<td> <center>$donnees[mail_cinema] </center> </td><br>";
            echo "<td> <center>$donnees[telephone_cinema] </center> </td><br>";
            echo "</tr><br><hr><br>";
        }
        $reponse->closeCursor();
        }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
?>
</boby>
</html>