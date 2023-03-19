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
        <h1>MODIFICATION D'UNE DESCRIPTION</h1>
        <form action="actiondescripProduit.php" method="post">

            <label for="referenceProduit">Reference du Produit</label>
            <input type="number" name="referenceProduit" placeholder="Entrer la reference du produit" required="required" autocomplete="off">

            <label for="newdescrip">Description</label>
            <input type="text" name="newdescrip" placeholder="Entrer la description" required="required" autocomplete="off">
                <br>
            <input type="submit" id="ajouter" name="bouton_enregistrer" value="Modifier">

        </form>
    </div>
</body>
</html>