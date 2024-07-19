<!--

><(((('>
╔═╗╔═╗╔═╗╔╗╔ ╔╦╗╔═╗
║ ╦║╣ ╠═╣║║║ ║║║║╣ 
╚═╝╚═╝╩ ╩╝╚╝o╩ ╩╚═╝
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisando...</title>
    <script>
        // PHP para obter o valor do parâmetro "q"
        <?php
        // Defina um valor padrão para $q se não estiver definido
        $q = isset($_GET['q']) ? $_GET['q'] : '';

        // Escapar caracteres especiais para segurança
        $q = htmlspecialchars($q);
        ?>

        // Redirecionamento via JavaScript
        window.location.href = "https://www.google.com.br/search?q=<?php echo $q; ?>+site%3Aredecanais.dev";
    </script>
</head>
<body>
    <h1>Pesquisando...</h1>
</body>
</html>
