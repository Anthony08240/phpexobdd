<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cinema</title>
</head>
<body>

<a href="index.php">retour</a>


<form action="traitement.php" method="post">
    <div>
        <label for="A">Le nom du cinema</label>
        <input type="text" id="nom_cinema" name="nom_cinema">
    </div>
    <div>
        <label for="B">La ville du cinema :</label>
        <input type="text" id="ville_cinema" name="ville_cinema">
    </div>
    <div>
        <label for="B">L'adresse du cinema :</label>
        <input type="text" id="adresse_cinema" name="adresse_cinema">
    </div>
    <div>
        <label for="B">Le mail du cinema :</label>
        <input type="text" id="mail_cinema" name="mail_cinema">
    </div>
    <div>
        <label for="B">Le numero de telephone du Cinema : </label>
        <input type="text" id="telephone_cinema" name="telephone_cinema">
    </div>
    
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>