  
<!-- Utilizzare un array di partenza e stampare tutti gli insegnanti
in un rettangolo grigio e tutti i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>

    <?php

        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

    ?>

    <div style="background-color: lightgrey;">
        
        <?php
            for ($i=0; $i < count($db['teachers']); $i++) { 
                echo "{$db['teachers'][$i]['name']} {$db['teachers'][$i]['lastname']}<br>";
            }
        ?>

    </div>

    <div style="background-color: lightgreen;">
        
        <?php
            for ($x=0; $x < count($db['pm']); $x++) { 
                echo "{$db['pm'][$x]['name']} {$db['pm'][$x]['lastname']}<br>";
            }
        ?>

    </div>

</body>
</html>