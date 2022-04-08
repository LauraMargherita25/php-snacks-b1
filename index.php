<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    <!-- Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->
    <?php
        $arrPartite = [
            [
                "casa" => [
                    "nome" => "Olimpia Milano",
                    "punti" => "55",
                ],
                "ospite" =>[
                    "nome" => "Cantù",
                    "punti" => "60",
                ]
            ]
        ]
    ?>

    <p>risultato: <?php echo $arrPartite[0]["casa"]["nome"] ?> - <?php echo $arrPartite[0]["ospite"]["nome"] ?> | <?php echo $arrPartite[0]["casa"]["punti"] ?> - <?php echo $arrPartite[0]["ospite"]["punti"] ?></p>
</body>
</html>