<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code005</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Time Calculator</h1>
    </header>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="sec">What's the total in seconds? </label>
            <input type="number" name="sec" id="idsec" required><br>
            <input type="submit" value="Calculate">
        </form>
        <div>
            <?php 
                $sec = $_REQUEST["sec"] ?? 0;

                echo "<p>Analyzing the value of you entered, <strong>" . number_format($sec, 0, ",", ".") . " seconds</strong> is equals a total of:</p>";

                $weekInSec = 60 * 60 * 24 * 7;
                $dayInSec = $weekInSec / 7;
                $hourInSec = $dayInSec / 24;
                $minutesInSec = $hourInSec / 60;

                // code challenge no if-else or loop

                $weeks = intdiv($sec, $weekInSec);
                $days = intdiv(($sec - ($weeks * $weekInSec)), $dayInSec);
                $hours = intdiv(($sec - ($weeks * $weekInSec) - ($days * $dayInSec)), $hourInSec);
                $minutes = intdiv(($sec - ($weeks * $weekInSec) - ($days * $dayInSec) - ($hours * $hourInSec)), $minutesInSec);
                $seconds = intdiv(($sec - ($weeks * $weekInSec) - ($days * $dayInSec) - ($hours * $hourInSec) - ($minutes * $minutesInSec)), 1);

                echo <<< TIMES
                    <ul>
                        <li>$weeks weeks</li>
                        <li>$days days</li>
                        <li>$hours hours</li>
                        <li>$minutes minutes</li>
                        <li>$seconds seconds</li>
                    </ul>
                TIMES;
            ?> 
        </div>
    </main>
</body>
</html>