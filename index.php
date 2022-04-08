<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- SNACK 1 -->
    <h1>snack 1</h1>
    <ul>
        <?php
        $array_partite = [
            [
                'casa' => [
                    'nome' => 'Roma',
                    'punteggio' => 100,

                ],
                'ospite' => [
                    'nome' => 'Lazio',
                    'punteggio' => 0,
                ]
            ],
            [
                'casa' => [
                    'nome' => 'Inter',
                    'punteggio' => 33,

                ],
                'ospite' => [
                    'nome' => 'Milan',
                    'punteggio' => 33,
                ]
            ],
            [
                'casa' => [
                    'nome' => 'Juve',
                    'punteggio' => 77,

                ],
                'ospite' => [
                    'nome' => 'Torino',
                    'punteggio' => 77,
                ]
            ],
            [
                'casa' => [
                    'nome' => 'Empoli',
                    'punteggio' => 88,

                ],
                'ospite' => [
                    'nome' => 'Brescia',
                    'punteggio' => 91,
                ]
            ],
            [
                'casa' => [
                    'nome' => 'Napoli',
                    'punteggio' => 56,

                ],
                'ospite' => [
                    'nome' => 'Atalanta',
                    'punteggio' => 57,
                ]
            ],
        ];

        for ($index = 0; $index < count($array_partite); $index++) { ?>
            <li>
                <span> <?= $array_partite[$index]['casa']['nome'] ?></span> -
                <span> <?= $array_partite[$index]['ospite']['nome'] ?></span> |
                <span> <?= $array_partite[$index]['casa']['punteggio'] ?></span> -
                <span> <?= $array_partite[$index]['ospite']['punteggio'] ?></span>

            </li>
        <?php }
        ?>
    </ul>


    <!-- SNACK 2 -->
    <!-- Passare come parametri GET name, mail e age e verificare cercando i metodi che non conosciamo nella documentazione che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <h1>snack 2</h1>

    <?php

    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
    }

    if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) { ?>
        <h4>Accesso Riuscito</h4>
    <?php
    } else { ?>
        <h4>Accesso Negato</h4>
    <?php
    }

    ?>

    <form action="" method="get">

        <label for="name">NAME</label>
        <input type="text" name="name" id="name">

        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email">

        <label for="age">AGE</label>
        <input type="text" name="age" id="age">

        <button>Verifica</button>
    </form>


    <!-- SNACK 4 -->
    <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
    <h1>snack 4</h1>

    <?php
    $num_rand = rand(1, 50);
    $arr_num = [];

    while (count($arr_num) < 15) {

        $num_rand = rand(1, 50);

        if (!in_array($num_rand, $arr_num)) {
            $arr_num[] = $num_rand; ?>

            <span><?= $num_rand ?> - </span>
    <?php
        }
    }

    var_dump($arr_num);
    ?>

    <!-- Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <h1>SNACK 5</h1>

    <?php

    $testo = "Roma Roma Roma,
    core de stà città,
    unico grande amore,
    de tanta e tanta gente,
    che fai sospirà.
    Roma Roma Roma,
    lassace cantà,
    da stà voce nasce un core,
    so centomila voci che hai fatto nammorà.
    Roma Roma bella,
    t'ho dipinta io,
    gialla come er sole,
    rossa come er core mio.
    
    Roma Roma mia,
    nun te fa cantà,
    tu sei nata grande
    e grande hai da restà.
    
    Roma Roma Roma,
    core de stà città,
    unico grande amore,
    de tanta e tanta gente,
    ch'hai fatto nammorà.";

    $array_parag = explode('.', $testo);

    var_dump($array_parag);

    ?>

    <div><?= $testo ?></div>

    <?php for ($index = 0; $index < count($array_parag); $index++) { ?>
        <h6><?= $array_parag[$index] ?></h6> <?php
                                            }
                                                ?>
</body>

</html>