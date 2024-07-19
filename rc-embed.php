<?php
// Define os cabeçalhos para evitar cache
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

// Inicializa as variáveis com valores padrão
$videoId = $_GET['v'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede Canais - Embed</title>
    <link rel="shortcut icon" href="https://redecanais.u1m.com.br/favicon.png" type="image/x-icon">
    <meta name="robots" content="noindex, nofollow">
    <style> body, html { margin: 0; padding: 0; height: 100%; } .video-container { position: relative; width: 100%; height: 100%; } .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; } </style>
</head>
<body>
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/<?php echo $videoId; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
</body>
</html>