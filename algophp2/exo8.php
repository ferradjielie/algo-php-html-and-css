
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Répétition d'image en PHP/HTML</title>
</head>
<body>
<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran</p>

<img src="http://my.mobirise.com/data/userpic/764.jpg" alt="Chien Moche">
<img src="./dog.jpg" alt="Chien Moche">
    
</body>
</html>


<?php


// echo header ("Content-type: dog.jpg");

function repeterImage($url, int $nbrepetition){
    $result = "";
    for($i = 0; $i < $nbrepetition; $i++){
        $result .= "<img src=$url alt='Chien Moche'>";
    }
    return $result;
}


echo repeterImage("http://my.mobirise.com/data/userpic/764.jpg", 100);





?>
