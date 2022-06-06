<?php

$a1 = [
    'nome' => 'Chiquim', //0
    'email' => 'chiquim@email.com', //1
    'telefone' => '19 9 9999-0000', //2
    'notas' => [ //3
        9,
        8.9,
        7.5,
        6,
    ]
];

$a2 = [
    'nome' => 'Maria',
    'email' => 'maria@email.com',
    'telefone' => '19 9 0000-9999',
    'notas' => [
        9,
        8.9,
        7.5,
        6,
    ]
];

$a3 = [
    'nome' => 'Zezim',
    'email' => 'zezim@email.com',
    'telefone' => '19 9 1111-0000',
    'notas' => [
        9,
        8.9,
        7.5,
        6,
    ]
];

$a4 = [
    'nome' => 'Luisa',
    'email' => 'luisa@email.com',
    'telefone' => '19 9 0000-1111',
    'notas' => [
        9,
        8.9,
        7.5,
        6,
    ]
];

$alunos = [ //dimensão 1
    $a1,
    $a2,
    $a3,
    $a4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($alunos as $cadaAluno) {
                    echo '<tr>';
                        echo '<td>' . $cadaAluno['nome'] . '</td>';
                        echo '<td>' . $cadaAluno['email'] . '</td>';
                        echo '<td>' . $cadaAluno['telefone'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>