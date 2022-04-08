<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
</body>

</html>