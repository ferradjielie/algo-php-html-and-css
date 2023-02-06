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
        <th> Lien wiki </th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td> france </td>
            <td> Paris </td>
            <td> lien</td>
        </tr>
        <tr>
            <td> italie</td>
            <td> Rome </td>
            <td> lien</td>

        </tr>
        <tr>
            <td> usa </td>
            <td> Washington</td>
            <td>lien</td>
        </tr>
        <tr>
            <td>allemagne</td>
            <td>Berlin</td>
            <td>lien</td>
        </tr>
        <tr>
            <td>espagne</td>
            <td>madrid</td>
            <td> lien </td>
        </tr>

    </tbody>
</table>




<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome" ,
    "Espagne" => "Madrid" 
];
function afficherTableHTML($capitales) {
    asort($capitales);
    echo "<table>
    <thead>
    <tr> 
        <th >Pays</th>
        <th>Capitale </th> 
        <th>Lien</th> 
    </tr>
    </thead>
    <tbody>";
    
    foreach($capitales as $pays => $capitale) {
        echo "<tr>
            <td>".strtoupper($pays)."</td>
            <td>".strtoupper($capitale)."</td>
            <td>    <a href= https://fr.wikipedia.org/wiki/$capitale target=_blank>lien</a>       </td>

        </tr>";
    }
    
   
 echo "</tbody></table>";
}
afficherTableHTML ($capitales) ;




//<td>" "a href=https://fr.wikipedia.org/wiki/".$capitale."target=_blank>lien</a></td>





























?>