<form action="" method="post">
    <input name="n1" placeholder="Número 1">

    <input name="n2" placeholder="Número 2"><br/>

    <button name="soma">Somar</button>
    <button name="subtracao">Subtrair</button>
    <button name="multiplicacao">Multiplicar</button>
    <button name="divisao">Dividir</button>
</form>

<?php
    if ($_POST) {
        
        if (isset($_POST['soma'])) {
            echo $_POST['n1'] + $_POST['n2'];
        }
        if (isset($_POST['subtracao'])) {
            echo $_POST['n1'] - $_POST['n2'];
        }
        if (isset($_POST['multiplicacao'])) {
            echo $_POST['n1'] * $_POST['n2'];
        }
        if (isset($_POST['divisao'])) {
            echo $_POST['n1'] / $_POST['n2'];
        }

    }
?>