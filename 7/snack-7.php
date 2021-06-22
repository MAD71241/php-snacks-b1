<?php

$alumni = [
    [
        "name" => "Fabio",
        "surname" => "Catozzo",
        "votes" => [
            8, 9, 4, 7
        ]
    ],
    [
        "name" => "Giovanni",
        "surname" => "Estro",
        "votes" => [
            5, 9, 4, 7
        ]
    ],
    [
        "name" => "Alessandra",
        "surname" => "Saronno",
        "votes" => [
            7, 5, 4, 6
        ]
    ],
    [
        "name" => "Miriam",
        "surname" => "Ruffolo",
        "votes" => [
            8, 9, 7, 7
        ]
    ],

];

foreach ($alumni as $student => $value) {

    $votes = $value["votes"];
    $divider = count($votes);
    foreach ($votes as $key => $vote) {
        $divisor = $divisor += $vote;
    }
    $media = $divisor / $divider;
    echo $value["name"] ." " .$value["surname"] .", media voto: " .$media;
    $divisor = 0;
}

?>