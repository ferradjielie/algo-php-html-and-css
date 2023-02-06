









<form action="http://localhost/ferradjielie/algophp2/exo5.php" method="post">
    <label for="Nom"> Nom </label>
    <input type="text" name="Nom" id="Nom">
    <label for="Prenom"> Prenom </label>
    <input type="text" name="Prenom" id="Prenom">
    <label for="Ville"> Ville </label>
    <input type="text" name="Ville" id="Ville">
</form>

<?php

$nomsInput = [ "Nom",
                "Prenom",
                "Ville"

                ];
              
              function afficherInput ( $nomsInput) {
                echo "<form>";
                foreach ($nomsInput as $texte){
                echo  "<label for=$texte> $texte </label>
                <input type=text name=$texte id=$texte>";
            }

                
            echo "</form>";
                

              }

                /*<label for=$texte> Prenom </label>
                <input type=text name=Prenom id=Prenom>*/
              afficherInput($nomsInput);




              


?>