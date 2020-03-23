<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>salle</title>
</head>
<body>


<a href="index.php">retour</a>


<form action="traitement_salle.php" method="post">
    <div>
        <label for="A">numero de la salle</label>
        <input type="text" id="numero_salle" name="numero_salle">

        <label for="B">capacite de la salle</label>
        <input type="text" id="capacite_salle" name="capacite_salle">
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>