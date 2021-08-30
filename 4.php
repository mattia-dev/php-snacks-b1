<!-- Creare un array contenente qualche alunno di un'ipotetica classe.
Ogni alunno avrà i seguenti dati:
 - nome
 - cognome
 - un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno. -->

<?php

    $classe = [
        
        [
            'nome' => 'Mattia',
            'cognome' => 'Ferrari',
            'voti' => [6, 9, 7]
        ],
        [
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'voti' => [10, 2, 8]
        ],
        [
            'nome' => 'Anna',
            'cognome' => 'Bianchi',
            'voti' => [4, 5, 9]
        ]
    ];

    for ($i=0; $i < count($classe); $i++) { 

        $mediaVoti = array_sum($classe[$i]['voti'])/count($classe[$i]['voti']);
        
        echo "La media voti di {$classe[$i]['nome']} {$classe[$i]['cognome']} è {$mediaVoti}.<br>";

    }

?>