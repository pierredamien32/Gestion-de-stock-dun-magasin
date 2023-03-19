<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enregistrement | Produit</title>
</head>
<body>
    <div class="contenu">
        <h1>VENTE D'UN PRODUIT</h1>
        <form action="actionVendreProduit.php" method="post">

            <label for="referenceProduit">Reference du Produit</label>
            <input type="number" name="referenceProduit" placeholder="Entrer la reference du produit" required="required" autocomplete="off">

            <label for="nombreExemplaires">Nombre d'exemplaires</label>
            <input type="number" name="nombreExemplaires" placeholder="Entrer le nombre d'exemplaire" required="required" autocomplete="off">
                <br>
            <input type="submit" id="ajouter" name="bouton_enregistrer" value="Vendre">

        </form>
    </div>
</body>
</html>