<?php

$numberStack = [];

for ($i=0; count($numberStack) < 15; $i++) { 
    $rng = rand(1, 15);
    if (!in_array($rng, $numberStack)) {
        array_push($numberStack, $rng);
    }
}

var_dump($numberStack);

?>