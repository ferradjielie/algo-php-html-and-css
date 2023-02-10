<?php


$date = ("10-02-2023");
$date = new IntlDateFormatter('fr_FR');
 $date-> format (time());


function formaterDateFr ($date) {
    $date = ("10-02-2023");
$date = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);

echo $date-> format (time());

}
formaterDateFr($date);





















?>


