<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio PHP </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
            $minimo = 1380.60;
            $salario = $_GET['salario']??0;
        ?>

    <main>
        <h1>Informe o seu Salário</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário R$</label>
            <input type="number" name="salario" id="id_salario" value="<?=$salario?>" step="0.01">
            
            <p>Considerando o salário mínimo de <strong>R$ <?= number_format($minimo,2,',','.')?></strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2 style="text-align:center;">Resultado final</h2>
        <?php

            $tot = intdiv($salario,$minimo);
            $dif = $salario % $minimo;

            echo "Quem recebe um salário de <strong>R$ "
                . number_format($salario,2,',','.') 
                    ."</strong><br>Ganha <strong>"
                        . $tot ."</strong> salários mínimo +<strong> R$"
                            . number_format($dif,2,',','.') ."</strong>";
        ?>
    </section>
</body>
</html>