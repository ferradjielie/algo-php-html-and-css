<?php

$email = "elanelan-formation.fr";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse e-mail est valide";}
    else {echo "L'adresse n'est pas valide";}

?>