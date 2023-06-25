<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio PHP </title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
       
        ul>li{
            list-style: none;
        }
    </style>
</head>
<body>

    <?php
      $saque = $_REQUEST['saque'] ?? 0;
    ?>
 
    <main>
        <h1 style="text-align:center;color: #B71E95;">Caixa Eletrônico</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Qual valor você deseja sacar?(R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>"
            >
            <p style="font-size: 0.8em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
    
        $resto = $saque;
        
        //saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;
        
        //saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;
        
        //saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;
        
        //saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
	

    ?>

    <section>
        <h2 style="text-align:center; color: #B71E95;">Saque de R$<?=number_format($saque,2,",",".")?> realizado</h2>
        <p style="text-align: center;">
           O Caixa eletrônico vai te entregar as seguintes notas:
        </p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$tot100?></li>
            <li><img src="img/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$tot50?></li>
            <li><img src="img/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$tot10?></li>
            <li><img src="img/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$tot5?></li>
        </ul>
    </section>
    
    <script>
        function mudaValor() {
            p.innerText = reaj.value;
        }
        mudaValor();
    </script>
</body>
</html>