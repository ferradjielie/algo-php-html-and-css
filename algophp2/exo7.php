

<style> 


form { background-color: #F8F8F8;
width: 100px;}







</style>




<form action="http://localhost/ferradjielie/algophp2/exo7.php" method="post">
    <input type="checkbox" name="Choix 1" id="Choix 1" checked>   <label for="Choix1"> Choix 1     </label></input>
    <input type="checkbox" name="Choix 2" id="Choix 2">   <label for="Choix2"> Choix 2  </label></input>
    <input type="checkbox" name="Choix 3" id="Choix 3" checked>  <label for="Choix1"> Choix 3 </label></input>
    <input type="checkbox" name="Choix 4" id="Choix 4">   <label for="Choix2"> Choix 4</label></input>

</form>

<?php

$table =[ "Choix1",
          "Choix 2" ,
          "Choix 3" ,
            "Choix 4"  ];


$tableauChoix  = [ "Choix1" => "checked",
"Choix 2" => "unchecked" ,
"Choix 3" => "checked" ,
  "Choix 4" => "unchecked",
  "Choix 5" => "unchecked" ,
  "Choix 6" => "checked" ,
    "Choix 7" => "unchecked"  ];

function genererCheckbox($table) {  

    echo "<form>" ;
    foreach ($table as $choix => $checkValue) {  
        echo  "<input type=checkbox name=$choix id=$choix $checkValue>
                    <label for=$choix> $choix </label>  
                </input> <br>";   
    }

   echo "</form>" ;
}

genererCheckbox($tableauChoix);






















?>