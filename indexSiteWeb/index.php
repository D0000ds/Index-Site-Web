<?php
require("php/Link.php");
require("php/Listing.php");

$li1 = new Listing();

$l1 = new Link("getcssscan", "https://getcssscan.com/css-box-shadow-examples", "Site Web permettant d'avoir des box shadow toute faite.", $li1);
$l2 = new Link("haikei", "https://app.haikei.app/", "Site Web permettant d'avair des backgrounds svg et png générer par ia.", $li1);
$l3 = new Link("Periodic table of HTML elements", "https://madebymike.github.io/html5-periodic-table/", "Site Web permettant de savoir a quoi sert chaque elements HTML", $li1);
$l4 = new Link("W3School Markup Validation Service", "https://validator.w3.org/#validate_by_input", "Site Web permettant de verifier si un code HTML est bon", $li1);
$l5 = new Link("Color Picker Online", "https://imagecolorpicker.com/", "Site Web permettant de prende une couleur d'une image que vous avez sur votre pc ou si vous avez un lien vers l'image", $li1);
$l6 = new Link("Flaticon", "https://www.flaticon.com/", "Site Web permettant d'avoir des icones", $li1);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Index Site Web Important Dev</title>
</head>
<body>
    <div class="container">
        <header>
            <h1> Site Web Important</h1>
        </header>
        <?php
            $li1->listLink()
        ?>
    </div>
    
</body>
</html>