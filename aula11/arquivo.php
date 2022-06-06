<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Ruan'.PHP_EOL);
fwrite($arquivo, 'Bruno'.PHP_EOL);
fwrite($arquivo, 'Luisa'.PHP_EOL);

fclose($arquivo);