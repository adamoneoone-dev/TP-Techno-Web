<?php 
    $date = strtotime("now");
    $anniv = strtotime("");
    $diff = ($anniv - $date);
    $mois = floor($diff / (86400*30));
    $semaines = floor(($diff - $mois*86400*30)/(86400*7));
    $jours = floor(($diff - $mois*86400*30 - $semaines*86400*7)/86400);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerice 1 TP 7</title>
</head>
<body>
    <p><?php echo "Il reste " .$mois. " mois, ". $semaines. " semaine".($semaines > 1 ? "s" : "").", et " . $jours . " jour".($jours > 1 ? "s" : ""); ?></p>
</body>
</html>