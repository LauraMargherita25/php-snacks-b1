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

        do {
            $num = rand(1, 15);
            if (in_array($num, $arrNum) === false) {
                $arrNum[] = "$num";
            }
        } while (count($arrNum) <= 14);

        var_dump($arrNum);





        /* Snack 5
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

        $fullTxt = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda odit aliquid ducimus excepturi labore numquam fugit non consequuntur ipsam, possimus soluta! Commodi distinctio error quod aliquid, dolorem aliquam laborum quia.
        Commodi modi tempora optio odit deserunt, blanditiis dolorum laboriosam aspernatur delectus saepe eos accusantium in neque suscipit debitis eveniet temporibus ex corporis, sunt nulla nostrum quae. Distinctio laboriosam praesentium totam!
        Similique, mollitia asperiores vel id harum reprehenderit deserunt corrupti facere fugit dolore et cumque possimus ratione vitae necessitatibus alias pariatur voluptas blanditiis obcaecati odit praesentium nemo rerum nulla. Eveniet, repellendus.
        Eius nobis porro beatae recusandae eaque consequatur nisi officiis voluptatem quia aut. Laudantium voluptatum nulla consequatur ea incidunt excepturi laborum eveniet animi minima laboriosam adipisci totam, ipsa et hic repellat!
        Debitis voluptas, similique rem ducimus iste officiis excepturi placeat iusto. Delectus, architecto quaerat laborum dolorem atque quia reiciendis, esse similique assumenda dignissimos tenetur aut, distinctio optio neque dolorum magni alias.
        Minus, quasi. Aut sed saepe fuga, delectus eveniet eligendi ad quam ipsum cumque sint nobis necessitatibus perferendis! Explicabo non quibusdam esse, obcaecati nisi minima doloribus inventore, ipsum modi repudiandae saepe.
        Expedita ut magni ad labore atque mollitia blanditiis accusamus debitis quas laudantium voluptate aliquid provident sint odit aspernatur libero architecto, cum commodi! Quas aspernatur eveniet expedita molestiae natus repellat necessitatibus?
        Quasi velit hic, suscipit deserunt, dolorem illum consequatur autem maxime reiciendis laudantium repudiandae omnis culpa non odit dignissimos inventore dolorum expedita accusamus doloribus odio obcaecati? Totam in reiciendis architecto doloremque!
        Eius, deserunt quia vero animi illum, unde ipsa aut ad non rerum distinctio maiores harum rem maxime. Sed, quas veniam doloribus ad ducimus quod atque dignissimos earum consequuntur ea eos?
        Voluptatibus ipsam explicabo fugiat velit distinctio eos nostrum impedit amet non, delectus quia officiis asperiores? Animi ipsam repudiandae eius ea distinctio. Amet facilis iusto consectetur inventore, obcaecati beatae consequatur id?";

        // $arrTxts = explode('.', $fullTxt);
        $arrTxts = preg_split('/[.|!|?]/', $fullTxt);

        // for ($i=0; $i < count($arrTxts); $i++) { 
        //     echo '<p>' . $arrTxts[$i] . '</p>';
           
        // }

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
        
        <p><?php echo $fullTxt ?></p>
        <div>
            <?php 
                for ($i=0; $i < count($arrTxts); $i++) { 
                    echo '<p>' . $arrTxts[$i] . '</p>';
                   
                }
            ?>
        </div>
        
</body>
</html>

