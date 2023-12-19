<?php
if (isset($_GET["p"])){
    switch ($_GET["p"]){
        case "geo":
            $title = "geographie";
            include("../templates/geographie.php");
            break;
        case "hist":
            $title = "histoire";
            include("../templates/histoire.php");
            break;
        case "cult":
            $title = "culture";
            include("../templates/culture.php");
            break;
        case "gal":
            $title = "galerie";
            include("../templates/galerie.php");
            break;
        case "form":
            $title = "fromulaire";
            include("../templates/contact.php");
            break;
        case "link":
            $title = "liens";
            include("../templates/liens.php");
            break;
        default:
            $title = "erreur 404";
            include("../templates/page-404.php");
    }
}else{
    $title = "accueil";
    include("../templates/accueil.php");
}