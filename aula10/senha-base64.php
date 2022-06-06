<?php

$senha = '123456';
$code = 'MTIzNDU2';

echo base64_encode($senha).'<br>'; //tipo de codificação. Transforma aquele dado em um códgo
echo base64_decode($code).'<br>'; //faz a decodificação.