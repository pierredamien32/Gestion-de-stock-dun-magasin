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
        <h1>ENREGISTREMENT D'UN LIVRE</h1>
        <form action="actionAjouteLivre.php" method="post">

            <label for="nom">Nom</label>
            <input type="text" name="nom" required="required" autocomplete="off">

            <label for="PrixAchat">Prix Achat</label>
            <input type="number" name="prix_achat" required="required" autocomplete="off">

            <label for="prix_vente">Prix vente</label>
            <input type="number" name="prix_vente" required="required" autocomplete="off">

            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" required="required" autocomplete="off">

            <label for="editeur">Editeur</label>
            <input type="text" name="editeur" required="required" autocomplete="off">
                <br>
            <input type="submit" id="ajouter" name="bouton_enregistrer" value="Ajouter">
        </form>
    </div>
</body>
</html>