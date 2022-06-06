<?php

$senha = '123456';

echo password_hash($senha, PASSWORD_ARGON2I) . '<br>'; //atualmente o método de criptografia mais seguro