<?php

$bandas = [
    // Nesse caso, é necessário informar o índice a ser acessado e o "subíndice" a ser exibido em tela.
    ['Dream Theater', 5], //[0] Para indicar esse array [0] Para indicar a banda e [1] Para indicar o número
    ['Iron Maiden', 10], //[1] Para indicar esse array [0] Para indicar a banda e [1] Para indicar o número
    ['Neo Pi Neo', 1], //[2] Para indicar esse array [0] Para indicar a banda e [1] Para indicar o número
];

echo $bandas[0][0];
echo " " . $bandas[0][1];