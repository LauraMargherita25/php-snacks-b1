<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    <!--  -->
    <?php
        /* Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 */

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
            ],
            [
                "casa" => [
                    "nome" => "Genova",
                    "punti" => "55",
                ],
                "ospite" =>[
                    "nome" => "Roma",
                    "punti" => "60",
                ]
            ],
        ];

        for ($i = 0; $i < count($arrPartite); ++$i) {
            echo "The results are: </br>". $arrPartite[$i]['casa']['nome'] . " - ". $arrPartite[$i]['ospite']['nome'] . " | " . $arrPartite[$i]['casa']['punti'] . " - " . $arrPartite[$i]['ospite']['punti'] . "</br>";
        } 





        /* Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

        $name = $_GET["nome"];
        $eMail = $_GET["email"];
        $age = $_GET["eta"];

        if (strlen($name) > 3 && is_numeric($age) == true && strpos($eMail, "@", 1) !== false && strpos($eMail, ".", 1) !== false) {
            echo "<p>Accesso riuscito</p>";
        } else {
            echo "<p>Accesso negato</p>";
        }





        /* Snack 4
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

        $arrNum = [];
        
        // for ($i=0; $i < 15; $i++) { 
            
        //     $num = rand(1, 100);
        //     // $arrNum[] = "$num";
        //     if (in_array($num, $arrNum) === false) {
        //         $arrNum[] = "$num";
        //     } else {

        //     }
        // }

        do {
            $num = rand(1, 100);
            if (in_array($num, $arrNum) === false) {
                $arrNum[] = "$num";
            }
        } while (count($arrNum) <= 15);

        var_dump($arrNum)
    ?>
        <br/>
        <br/>
        <form action="" method="get">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">

            <label for="eta">Età:</label>
            <input type="text" name="eta" id="eta">

            <input type="submit">

        </form>
</body>
</html>

