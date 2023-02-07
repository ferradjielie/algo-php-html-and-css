<?php



$nomsInput = [ "Nom",
                "Prenom",
                "email",
                "Ville"

                ];
              
              function afficherInput ( $nomsInput) {
                echo "<form>";
                foreach ($nomsInput as $texte){
                echo  "<label for=$texte> $texte </label> <br>
                <input type=text name=$texte id=$texte> <br>";
            }

                
            echo "</form>";
                

              }

                /*<label for=$texte> Prenom </label>
                <input type=text name=Prenom id=Prenom>*/

                echo "<p> <h4> Informations à compléter: </h4>  </p>";
              afficherInput($nomsInput);

              
              
              
              $tab= ["Masculin",
              "Féminin",
              "Autre"];

              function afficherRadio($tab) {
                echo "<form>";
                foreach ( $tab as $categorie) { echo
                 "<input type=radio name=catégorie value=$categorie id=$categorie 
                   <label for=$categorie>  $categorie  <br> </label>  
                    </input> <br>" ;}

                echo "</form>";


              }
              echo "<p> <h4> Sexe: </h4> </p>" ;
              
              afficherRadio($tab);




              $tab2= ["Développeur Logiciel",
              "Designer web",
              "Intégrateur",
              "Chef de projet" ];

              function afficherRadio2($tab) {
                echo "<form>";
                foreach ( $tab as $categorie) { echo
                 "<input type=radio name=catégorie value=$categorie id=$categorie 
                   <label for=$categorie>  $categorie  <br> </label>  
                    </input> <br>" ;}

                echo "</form>";

     echo "<button type='submit'>Submit form</button>";

              }
              echo "<p> <h4> Choix de formation: </h4> </p>" ;
              
              afficherRadio2($tab2);





              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
    





















?>