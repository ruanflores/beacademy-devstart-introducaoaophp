<?php

$idade = 21;

echo $idade >= 18 ? "maior de idade" : "menor de idade";

echo "<br>";

// $nome = 'Ruan';
// echo isset($nome) ? $nome : 'nome não definido';

echo $nome ?? 'nome não definido'; //spread operator - substitui o código da linha 10