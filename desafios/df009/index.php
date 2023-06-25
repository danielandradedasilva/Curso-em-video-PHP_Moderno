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
            $nota1 = $_GET['nota1']??0;
            $nota2 = $_GET['nota2']??0;
            $peso1 = $_GET['peso1']??1;
            $peso2 = $_GET['peso2']??1;

            //calculando a media simples
            $mediaSimples = ($nota1 + $nota2) / 2;
            //////////////////////////////////////
            //calculando a media ponderada
            $mediaPonderada = ($nota1 * $peso1 + $nota2 * $peso2)/($peso1 + $peso2);      
        ?>

 
    <main>
        <h1 style="text-align:center;color: blue;">Médias Aritiméticas</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">1º Valor:</label>
            <input type="number" name="nota1" id="id_nota1" value="<?=$nota1?>"  required>

            <label for="salario">1º peso:</label>
            <input type="number" name="peso1" id="id_peso1" value="<?=$peso1?>" min="1"  required>
            
            <label for="salario">2º Valor:</label>
            <input type="number" name="nota2" id="id_nota2" value="<?=$nota2?>"  required>

            <label for="salario">2º peso:</label>
            <input type="number" name="peso2" id="id_peso2" value="<?=$peso2?>" min="1" required>
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2 style="text-align:center;">Resultado final</h2>

        <?php

            echo "Analizando os valores<strong> $nota1</strong> e <strong> $nota2</strong>:
                <ul>
                    <li>
                        A <strong>média SIMPLES </strong> entra os valores é igual a ". number_format($mediaSimples,2,',','.') ."
                        </li>
                    <li>
                        A <strong>média PONDERADA </strong> com pesos $peso1 e $peso2 é igual a ". number_format($mediaPonderada,2,',','.') ."
                    </li>
                </ul>
            ";
         
        ?>
    </section>
</body>
</html>