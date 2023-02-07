

<form action="http://localhost/ferradjielie/algophp2/exo9.php" method="post">


    <input type="radio"  name="catégorie" value="Masculin"  id="Macsulin">    <label for="Masculin"> Masculin    </label> </input>
    <input type="radio"  name="catégorie" value="Féminin"  id="Féminin">    <label for="Féminin"> Féminin   </label></input>
    <input type="radio"  name="catégorie" value="Autre"  id="Autre">    <label for="Autre"> Autre    </label></input>

</form>

    <?php
      
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
              
              afficherRadio($tab);





    ?>