<?php
require("php/Link.php");
require("php/Listing.php");

$li1 = new Listing();

$l1 = new Link("Test1", "test1", "testtt1", $li1);
$l2 = new Link("Test2", "test2", "testtt2", $li1);

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
            <span> Site Web Important</span>
        </header>
        <?php
            $li1->listLink()
        ?>
    </div>
    
</body>
</html>