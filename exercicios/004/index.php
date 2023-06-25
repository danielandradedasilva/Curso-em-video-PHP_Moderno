<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Curso de PHP </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>
        <?php 
            $nome = "Daniel";
            $sobrenome = "Andrade";
            const PAIS = "Brasil";
            echo"Meu nome é $nome $sobrenome, eu moro no ". PAIS. "!";
        ?>
    </h1>

</body>
</html>