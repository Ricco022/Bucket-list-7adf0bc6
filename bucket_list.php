<?php

$h = readline("Hoeveel activiteiten wil je toevoegen?");

if (is_numeric($h)) {
    $lijst = array();
} else {
    exit($h . " is geen getal, probeer het opnieuw");
}

for ($i=0; $i < $h; $i++) { 
    $act = readline("Wat wil je toevoegen aan jouw bucket list?");
    array_push($lijst,$act);
}

echo ("Op jouw bucket list staat " . PHP_EOL);

foreach ($lijst as $hbhjhbkjbhj) {
    echo ($hbhjhbkjbhj) . PHP_EOL;
}
?>