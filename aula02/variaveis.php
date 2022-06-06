<?php

$tenhoEmprego = true; //booleano
$tenhoEmprego = false;

$numeroCasa = 2006; //integer
$saldoBancario = -2569.89; //float

$nome = "Ruan"; //string
$bebida = "café";

$bebida = "água";

$bebida = "água com gás";

$cpf = "012.345.678-99"; //dados que podem começar com 0, devem ser tratados como strings

echo "Meu nome é ". $nome. " e eu gosto de " .$bebida;

//variáveis não devem: conter espações em branco, começar com números, ter caracteres especiais (incluindo
//o hífen -)