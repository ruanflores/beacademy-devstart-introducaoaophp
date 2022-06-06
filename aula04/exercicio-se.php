<?php

// Estrutura sequencial, estrutura de decisão, estrutura de repetição

$n = 0;

/* if ($n > 0) {
    echo "Positivo";
} else {
    if ($n < 0) {
        echo "Negativo";
    } else {
        echo "Nulo";
    }
} */

if ($n > 0) {
    echo "Positivo";
} elseif ($n < 0) {
    echo "Negativo";
} else {
    echo "Nulo";
}

echo "<br> Pronto, terminou";