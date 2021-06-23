<?php

//Snack 1
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 

$games = [
    [
        //Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
        "away" => "Olimpia Milano",
        "awayPts" => 60,
        "home" => "Cantù",
        "homePts" => 55,
    ],    [
        "away" => "Anadolu Efes",
        "awayPts" => 86,
        "home" => "Barcellona",
        "homePts" => 81,
    ],    [
        "away" => "Olimpia Milano",
        "awayPts" => 76,
        "home" => "CSKA Mosca",
        "homePts" => 92,
    ],    [
        "away" => "Fenerbahçe",
        "awayPts" => 88,
        "home" => "Real Madrid",
        "homePts" => 87,
    ],
];

/* Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

for ($i=0; $i < count($games); $i++) {?>

<h2> <?php echo $games[$i]["away"] ." - " .$games[$i]["home"] ." | " .$games[$i]["awayPts"] ." - " .$games[$i]["homePts"] ; ?> </h2>

<?php
}

?>