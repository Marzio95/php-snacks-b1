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

    <h1>SNACK 6</h1>
    <!-- Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. -->
    <?php

    $ads = [
        [
            'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
            'link' => 'https://www.google.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
            'link' => 'https://www.facebook.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
            'link' => 'https://codepen.io',
            'is_active' => false,
        ],
        [
            'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
            'link' => 'https://laravel.com',
            'is_active' => false,
        ],
        [
            'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
            'link' => 'https://www.php.net',
            'is_active' => true,
        ],

    ];

    $my_array = [];
    foreach ($ads as $element) {
        if ($element['is_active'] == true) {
            $my_array[] = $element;
        }
    }
    $i = rand(0, count($my_array) - 1);
    var_dump($i);
    var_dump($my_array);
    foreach ($my_array as $element) {
        if (array_search($element, $my_array) == $i) {
            echo "<img src='$element[image_path]' alt=''>";
        }
    }


    ?>
</body>

</html>