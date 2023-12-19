<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("../templates/inc/banniere.php");
    include("../templates/inc/menu.php");?>
    <main>
        <h2>Pour nous contacter</h2>
        <img src="img/contacts.jpg">
        <h3>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</h3>
        <form>
            <div>
            <label>NOM :</label>
            <input type="text" required pattern="[A-Z][a-z]*">
            </div>
            <div>
            <label>PRENOM :</label>
            <input type="text" required pattern="[A-Z][a-z]*">
            </div>
            <div>
            <label>VILLE :</label>
            <input type="text" required pattern="[A-Z].*">
            </div>
            <div>
            <label>E-MAIL :</label>
            <input type="text" required pattern=".*@[^\.]*\..*">
            </div>
            <div>
            <label>COMMENTAIRES :</label>
            <input type="text" id="commentaires">
            </div>
            <div>
            <label></label>
            <input type="submit" value="Envoyer votre message">
            </div>
        </form>
    </main>
</body>
</html>