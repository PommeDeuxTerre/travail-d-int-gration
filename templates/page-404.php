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
        <h2>Erreur 404</h2>
        <img src="img/404.jpg">
        <h3>Euh, la page demandée est introuvable !</h3>
        <h3>Le mieux est de retourner à <a href="./">l'accueil</a>.</h3>
    </main>
</body>
</html>