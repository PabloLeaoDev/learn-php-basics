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

            $startDay = date("m-d-Y", strtotime("-7 days"));
            $endDay = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $startDay .'\'&@dataFinalCotacao=\'' . $endDay . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $data = json_decode(file_get_contents($url), true); // false for object
            $counting = $data["value"][0]["cotacaoCompra"];

            $brlValue = $_GET["value"];

            $result = $brlValue / $counting;

            echo "Your R\${$brlValue} is equivalent to <strong>US\$" . number_format($result, 2, ",", ".") . "</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Return to the previous page</a></p>
    </main>
</body>
</html>