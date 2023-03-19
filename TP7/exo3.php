
<?php
$pays_medailles = array(
    "Chine" => array(
      "or" => 38,
      "argent" => 32,
      "bronze" => 18
    ),
    "Japon" => array( 
      "or" => 27, 
      "argent" => 14, 
      "bronze" => 17 
    ),
    "Grande-Bretagne" => array(
      "or" => 22,
      "argent" => 21,
      "bronze" => 22
    ),
    "Australie" => array(
      "or" => 17,
      "argent" => 7,
      "bronze" => 23 
    ),
    "ROC" => array(
      "or" => 16,
      "argent" => 22,
      "bronze" => 20
    ),
    "Italie" => array(
      "or" => 10,
      "argent" => 10,
      "bronze" => 20
    ),
    "France" => array(
      "or" => 10,
      "argent" => 12,
      "bronze" => 11
    ),
    "Allemagne" => array(
      "or" => 10,
      "argent" => 11,    
      "bronze" => 16
    ),
    "Canada" => array(
      "or" => 7,
      "argent" => 6,
      "bronze" => 11
    )
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP7 - Exo 3</title>
</head>
<body>
    <?php
    $max = 0;
    $paysmaxbronze = "";
    foreach($pays_medailles as $key => $pays) {
        if($pays["bronze"] > $max) {
            $max = $pays["bronze"];
            $paysmaxbronze = $key;
        }
    }
    echo "<p>Pays avec le plus de médailles de bronze: ".$paysmaxbronze."</p>";
    echo "<p>Nombre total de médailles par pays:</p>";
    echo "<ul>";
    foreach($pays_medailles as $key => $pays) {
        echo "<li>".$key." :". array_reduce($pays, function($v1,$v2) {return $v1+$v2;})."</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>