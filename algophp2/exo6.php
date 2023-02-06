


<form action="http://localhost/ferradjielie/algophp2/exo6.php" method="post">
    <select name="sexe" id="sexe"> 
        <option value="Monsieur">Monsieur</option>
        <option value="Monsieur">Madame</option>
        <option value="Monsieur">Mademoiselle</option>

</select>
</form>

<?php

$sexe =["Monsieur",
         "Madame",
         "Mademoiselle"

];

function alimenterListeDeroulante($sexe) {
    echo "<form>";
    echo "<select>";
    
    foreach ($sexe as $sexes) {
        echo 
        "<option value=$sexes>$sexes</option>";
    }
    echo "</form>";
    echo "</select>";

    

}
alimenterListeDeroulante($sexe);








?>

