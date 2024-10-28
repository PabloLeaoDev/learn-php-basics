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
            const USD = 5.69;
            $brlValue = $_GET["value"];
            $usdValue = $brlValue / USD;

            // $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // echo "Your " . numfmt_format_currency($pattern, $brlValue, "BRL") . " is equivalent to " . numfmt_format_currency($pattern, $usdValue, "USD");

            // the solution commented above requires the intl library

            echo "Your R\$" . number_format($brlValue, 2, ",", ".") . " is equivalent to US\$" . number_format($usdValue, 2, ",", ".");
        ?>
        <p><a href="javascript:history.go(-1)">Return to the previous page</a></p>
    </main>
</body>
</html>