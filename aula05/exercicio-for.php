<select>
    <option selected> -- Selecione o Ano -- </option>
    <?php

        $ano = 2022;

        for ($ano = 2022; $ano >= 1900; $ano++) {
            echo "<option>{$ano}</option>";
        }

    ?>
</select>