<?php 

// un commentaire sur un ligne
echo "<h1>Bienvenue</h1>";
/*
    commentaire 1
    commentaire 2
*/
echo "Tout va bien";
$var1 = "ferradji elie";
echo "<br>salut $var1 et soit le bienvenue <br>";
echo 'hey '. $var1 . ' ca va ?' ; 

echo "1";
$cara = "Notre formation DL commence aujourd'hui";
 echo "<br>";  echo strlen ($cara); 

echo "<br>";

echo "2";
echo "<br>";

echo "<br>";
$mots = "Notre formation DL commence aujourd'hui" ;
echo str_word_count ($mots);

echo "<br>";

echo "3";

$phrase1 = "Notre formation DL commence aujourd'hui";
echo $phrase1;
echo "<br>" ;
echo str_replace ("aujourd'hui", "demain", $phrase1);
echo "<br>";
echo "<br>";



echo "<br>";
echo "<br>";
echo "<br>";

echo "4" ;
 
 echo "<br>";
echo "<br>";

$franc = 150;
$conv = 6.55957;
$euro = round($franc/$conv, 2) ;
echo $euro;

echo "<br>";
echo "<br>";

$prixuni = 5.99 *1.20;
$quantite = 8;
$taux = 1.20;
 $montantfacture = $prixuni * $quantite ;
 echo $montantfacture;

 echo "<br>";
echo "<br>";

$age = 10;
if ($age==6 || $age== 7 )
{echo "enfant appartient à la catégorie Poussin";}
elseif ( $age == 8 || $age==9)
{echo "enfant appartient à la catégorie Pupille";}
elseif ($age==10 || $age==11)
{echo "enfant appartient à la catégorie Minime ";}
elseif ($age>=12)
{echo "enfant appartient à la catégotie Cadet"; }
else {echo "enfant appartient à aucune catégorie";}
 

 





/*strrev
strtolower
*/










?>

