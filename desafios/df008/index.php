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
            $numero = $_GET['num']??1;
            $raizQuadrada = sqrt($numero);
            $raizCubica = pow($numero,1/3);
           
        ?>

    <main>
        <h1 style="text-align:center;">Informe um Número</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Número:</label>
            <input type="number" name="num" id="id_num" value="<?=$numero?>" step="0.01">
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2 style="text-align:center;">Resultado final</h2>

        <?php

            echo "Analizando o número<strong> $numero</strong>, temos:
                <ul>
                    <li>
                        A sua raiz quadrada é <strong>". number_format($raizQuadrada,2,",",".")."</strong>
                    </li>
                    <li>
                    A sua raiz cúbica é <strong>". number_format($raizCubica,2,",",".")."</strong>
                    </li>
                </ul>
            ";
         
        ?>
    </section>
</body>
</html>