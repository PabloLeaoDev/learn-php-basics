<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Process Result</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["name"] ?? "Unknow";
            $mName = $_GET["middlename"] ?? "Unknow";
            echo "It's a pleasure to meet you, <strong>$name $mName</strong>!";
        ?>
        <p><a href="javascript:history.go(-1)">Return to the previous page</a></p>
    </main>
</body>
</html>