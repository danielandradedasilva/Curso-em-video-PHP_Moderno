<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
    <h1>SuperGlobais PHP</h1>
    </header>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "TERÇA", time() - 3600);

                session_start();
                $_SESSION["Teste"] = "Funcionou";
            
                echo '<h1>Superglobal GET</h1> ';
                var_dump($_GET);

                echo '<br><h1>Superglobal POST</h1> ';
                var_dump($_POST);

                echo '<br><h1>Superglobal REQUEST</h1> ';
                var_dump($_REQUEST);

                echo '<br><h1>Superglobal COOKIE</h1> ';
                var_dump($_COOKIE);

                echo '<br><h1>Superglobal SESSION</h1> ';
                var_dump($_SESSION);

                echo '<br><h1>Superglobal ENV</h1> ';
                var_dump($_ENV);

                echo '<br><h1>Superglobal SERVER</h1> ';
                var_dump($_SERVER);

                echo '<br><h1>Superglobal GLOBALS</h1> ';
                var_dump($GLOBALS);


            ?>
        </pre>
    </main>
    
</body>
</html>