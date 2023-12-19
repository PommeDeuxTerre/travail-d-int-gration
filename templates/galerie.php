
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lightbox/css/lightbox.min.css">
</head>
<body>
    <?php include("../templates/inc/banniere.php");
    include("../templates/inc/menu.php");?>
    <main id="Galerie">
        <h2>Galerie Photo</h2>
        <table>
            <tr>
                <td><a href="img/1280px_Exterior_of_the_Wilanów_Palace_Poland" data-lightbox="diapo"><img src="img/480px_Exterior_of_the_Wilanów_Palace_Poland.jpg"></a>
                <p>Wilanów Palace Poland</p></td>
                <td><a href="img/1280px_NicolasCopernic" data-lightbox="diapo"><img src="img/480px_NicolasCopernic.jpg"></a><p>statue de Nicolas Copernic</p></td>
            </tr>
            <tr>
                <td><a href="img/1280px_Palac_Na_Wyspie_Varsovie" data-lightbox="diapo"><img src="img/480px_Palac_Na_Wyspie_Varsovie.jpg"></a><p>Palac Na Wyspie Varsovie</p></td>
                <td><a href="img/1280px_Poland_Castle_Square" data-lightbox="diapo"><img src="img/480px_Poland_Castle_Square.jpg"></a><p>Poland Castle Square</p></td>
            </tr>
            <tr>
                <td><a href="img/1280px_Poland_Palace_Prezydencki" data-lightbox="diapo"><img src="img/480px_Poland_Palace_Prezydencki.jpg"></a><p>Poland Palace Prezydencki</p></td>
                <td><a href="img/1280px_Warszawa_Palac_Lazienkowski" data-lightbox="diapo"><img src="img/480px_Warszawa_Palac_Lazienkowski.jpg"></a><p>Warszawa Palac Lazienkowski</p></td>
            </tr>
        </table>
    </main>
    <script src=lightbox/js/lightbox-plus-jquery.min.js></script>
</body>
</html>