<?php

$nome = "Ruan";
$sobrenome = "Flores";
$idade = 100;
$cidade = "Campinas";

$nome2 = "Chiquim";
$nome2 .= "da Silva"; //Chiquim da Silva - "incremento", só que concatenando

echo $nome . " " . $sobrenome;

echo "Eu me chamo " . $nome . " " . $sobrenome . " tenho " . $idade . " anos e moro em " . $cidade;

echo "<br>";

echo "Eu me chamo {$nome} {$sobrenome}, tenho {$idade} anos e moro em {$cidade}"; //template string