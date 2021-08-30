<!-- Creiamo una struttura dati che rappresenta le partite di basket di un’ipotetica tappa del calendario.
Ogni array interno conterrà le seguenti informazioni: una squadra di casa, una squadra ospite,
punti fatti dalla squadra di casa, punti fatti dalla squadra ospite
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$games = [
    [
        'homeTeam' => 'Olimpia Milano',
        'guestTeam' => 'Cantù',
        'homeTeamScore' => '55',
        'guestTeamScore' => '60'
    ],
    [
        'homeTeam' => 'Virtus Bologna',
        'guestTeam' => 'Virtus Roma',
        'homeTeamScore' => '40',
        'guestTeamScore' => '30'
    ],
    [
        'homeTeam' => 'F.C. Matera',
        'guestTeam' => 'Inter',
        'homeTeamScore' => '55',
        'guestTeamScore' => '1'
    ]

];

for ($i=0; $i < count($games) ; $i++) { 
    
    echo "{$games[$i][homeTeam]} - {$games[$i][guestTeam]} | {$games[$i][homeTeamScore]} - {$games[$i][guestTeamScore]}<br>";
    
}

?>