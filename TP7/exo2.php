<?php
error_reporting(E_ALL);

$films = array(
    "Forrest Gump" => 1994,
    "The Shawshank Redemption" => 1994,
    "The Godfather" => 1972,
    "The Godfather: Part II" => 1974,
    "The Dark Knight" => 2008,
    "12 Angry Men" => 1957,
    "Schindler's List" => 1993,
    "The Lord of the Rings: The Return of the King" => 2003,
    "Pulp Fiction" => 1994,
    "The Good, the Bad and the Ugly" => 1966,
    "The Lord of the Rings: The Fellowship of the Ring" => 2001,
    "Fight Club" => 1999,
    "The Lord of the Rings: The Two Towers" => 2002,
    "Inception" => 2010,
    "Star Wars: Episode V - The Empire Strikes Back" => 1980,
    "The Matrix" => 1999,
    "Goodfellas" => 1990,
    "One Flew Over the Cuckoo's Nest" => 1975,
    "Seven Samurai" => 1954,
    "Se7en" => 1995
); 
asort($films);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP7 - Exo 2</title>
</head>
<body>
    <?php
        foreach($films as $key => $value) {
            if($value > 2000){
                echo "<p>$key</p>";
            }
        }
    ?>
</body>
</html>