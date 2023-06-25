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
       $preco = $_REQUEST['preco'] ?? 0;
       $reaj = $_REQUEST['reaj'] ?? 0;


    ?>
 
    <main>
        <h1 style="text-align:center;color: #B71E95;">Reajustador de Preços</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto(R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>"
            >

            <label for="reaj">Qula será o percentual do reajuste?( <strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>" style="cursor: pointer;">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>

        <?php 
            $aumento = ($preco * $reaj) / 100;
            $novoPreco = $preco + $aumento;
        ?>

    <section>
        <h2 style="text-align:center; color: #B71E95;">Resultado do Reajuste</h2>
        <p>
            O produto que custa R$ <?=$preco?>, com <strong><?=$reaj?>% de aumento<br></strong>vai passar a custar <strong>R$ <?=$novoPreco?></strong> a partir de agora.
        </p>  
    </section>
    
    <script>
        function mudaValor() {
            p.innerText = reaj.value;
        }
        mudaValor();
    </script>
</body>
</html>