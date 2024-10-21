<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Example</h1>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        echo "Today is " . date('Y/m/d');
        echo " and the current hour is " . date('G:i:s');
    ?>
</body>
</html>