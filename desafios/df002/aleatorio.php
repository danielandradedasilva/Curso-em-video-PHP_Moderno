<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ex002 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <section>
    <h1>Trabalhando com números aleatórios</h1>

    <?php
        $min = 0;
        $max = 100;
        
        $num = mt_rand($min, $max);

        echo "<p>Gerando um número aleatório entre $min e $max</p>";
        echo "O valor gerado foi <strong>$num</strong>";
    ?>
    <button style="margin-top: 15px;" onclick="javascript:document.location.reload()">&#x1f504 Gerar outro</button>
   </section>
</body>
</html>