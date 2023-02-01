<style> 
table, th, td {
border: 1px solid;
}
</style>


<table>
    <thead>
    <tr> 
        <th >Pays</th>
        <th>Capitale </th> 
    </tr>
    </thead>
    <tbody>
        <tr>
            <td> france </td>
            <td> Paris </td>
        </tr>
        <tr>
            <td> italie</td>
            <td> Rome </td>
        </tr>
        <tr>
            <td> usa </td>
            <td> Washington</td>
        </tr>
        <tr>
            <td>allemagne</td>
            <td>Berlin</td>
        </tr>
    </tbody>
</table>

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"  
];

$capitales2 = [
    "Belgique" => "Bruxelles",
    "Japon" => "Tokyo",  
];

afficherTableHTML($capitales);
afficherTableHTML($capitales2);

function afficherTableHTML($capitales) {
    krsort($capitales);
    echo "<table>
    <thead>
    <tr> 
        <th >Pays</th>
        <th>Capitale </th> 
    </tr>
    </thead>
    <tbody>";
    
    foreach($capitales as $pays => $capitale) {
        echo "<tr>
            <td>".mb_strtoupper($pays)."</td>
            <td>".$capitale."</td>
        </tr>";
    }
    
    echo "</tbody></table>";
}



























/*echo "<td>$pays</td>";
echo "<td>$capitales</td>";

echo "<td>$pays</td>";
echo "<td>$capitales</td>";

echo "<td>$pays</td>" ;
echo  "<td>$capitales</td>"; */









/*$tableau = [
    "Micka" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($tableau);  // k = key -> trier de A à Z selon la clé (ici le prénom)
krsort($tableau); // r = reverse
asort($tableau);  // trier le tableau selon la valeur (ici la langue)
arsort($tableau); 

// parcourir le tableau qui associe le prénom et la langue
foreach($tableau as $prenom => $langue) {
    // on vérifie la langue rencontrée
    // en fonction de la langue rencontrée, on affichera la bonne salutation (Salut, Hola ou Hello) + prénom
    // si la langue est FRA -> "Salut + prénom", si la langue est ESP -> "Hola + prénom" sinon "Hello + prénom"
    if($langue == "FRA") {
        echo "Salut " . $prenom."<br>";
    } elseif ($langue == "ESP") {
        echo "Hola " . $prenom."<br>";
    } else {
        echo "Hello " . $prenom . "<br>";*/






?>