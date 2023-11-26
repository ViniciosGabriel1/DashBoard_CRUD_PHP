<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    s<br><br>
    <section>

        <?php
         echo "Boa ",$_POST["nome"]." ". $_POST["snome"]."<br>";
         echo "Olá <strong> ",$_POST["login"]."</strong> você está logado !!"."<br>";
         echo "A senha é : ".MD5($_POST['senha'])
        ?>
    </section>
</body>

</html>