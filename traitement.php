<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="index.php">retour<br><br><br></a>
</body>
</html>

<?php


$nom_cinema = $_POST['nom_cinema'];
$ville_cinema = $_POST['ville_cinema'];
$adresse_cinema = $_POST['adresse_cinema'];
$mail_cinema = $_POST['mail_cinema'];
$telephone_cinema = $_POST['telephone_cinema'];


// Connection Bdd
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=db5000303615.hosting-data.io;dbname=dbs296602', 'dbu526395', 'PaPef:5F' );
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


    $stmt = $bdd->prepare("INSERT INTO cinema (nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema) 
    VALUES (:nom_cinema, :ville_cinema, :adresse_cinema, :mail_cinema, :telephone_cinema)");
    $stmt->execute(array(
        'nom_cinema' => $nom_cinema,
         'ville_cinema'=>$ville_cinema,
         'adresse_cinema'=>$adresse_cinema,
         'mail_cinema'=>$mail_cinema,
         'telephone_cinema'=>$telephone_cinema));

         echo "envoyé";
?>
</body>