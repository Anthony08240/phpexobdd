<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cinema</title>
</head>
<body>


<a href="index.php">retour</a>

<?php

        $numero_salle=$_POST['numeroSalle'];

         $capacite_salle=$_POST['capacite_salle'];

         
         // Connection Bdd
         try {
             $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
             $bdd = new PDO('mysql:host=db5000303615.hosting-data.io;dbname=dbs296602', 'dbu526395', 'PaPef:5F' );
             }
         catch(PDOException $e)
             {
             echo $sql . "<br>" . $e->getMessage();
             }

             
         $stmt = $bdd->prepare("INSERT INTO salle (numero_salle, capacite_salle, id_cinema)
          VALUES ( :numero_salle, :capacite_salle, :id_cinema)");

         $stmt->execute(array(
             ':numero_salle' => $numero_salle,
             ':id_cinema' => 4,
             ':capacite_salle'=>$capacite_salle));
?>
</body>
</html>