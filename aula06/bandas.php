<?php

$bandas = [
    'Dream Theater', //0
    'Neo Pi Neo', //1
    'ExaltaSamba', //2
    'Iron Maiden', //3
    'Aviões do Forró', //4
];

$bandas[100] = 'Nirvana'; //100
$bandas[9] = 'Calcinha Preta'; //9

$bandas[2] = 'Turma do Pagode'; //2 - Substitui ExaltaSamba

echo '<ul>';

foreach ($bandas as $cadaBanda) {
    echo "<li>{$cadaBanda}</li>";
}

/* for ($n = 0; $n <= 3; $n++) {
    echo '<li>' . $bandas[$n] . '</li>';
} */

echo '</ul>';