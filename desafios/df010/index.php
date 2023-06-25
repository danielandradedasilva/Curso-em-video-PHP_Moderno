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
        $anoAtual = date('Y');
        $anoNascimento = $_GET['anoNascimento'] ?? 2000;
        $ano = $_GET['ano'] ?? $anoAtual;
        $resultadoIdade = $ano - $anoNascimento;
    ?>
 
    <main>
        <h1 style="text-align:center;color: blue;">Calculando a sua idade</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="id_anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="id_anoNascimento" value="<?=$anoNascimento?>" min="1900" max="<?=$anoAtual?>">

            <label for="id_ano">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?= $anoAtual?></strong>)</label>
            <input type="number" name="ano" id="id_ano" value="<?=$ano?>" min="1900">
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2 style="text-align:center;">Resultado</h2>

        <?php
            if($ano < $anoNascimento){
                echo "Informe uma data, maior ou igual ao seu ano de nascimento";
            }else{
                echo "Quem nasceu $anoNascimento vai ter<strong> $resultadoIdade anos </strong>em $ano";
            }       
        ?>
    </section>
</body>
</html>