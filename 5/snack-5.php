<?php

$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum blanditiis iure ab beatae porro dicta? Id, nisi necessitatibus. Explicabo error minus autem quibusdam tenetur. Aperiam.";
$text_array =explode(".", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Testo Originale:</h2>
    <p> <?php echo $text ?></p> 
    <h2>Testo Modificato: </h2>
    <?php
    foreach ($text_array as $index => $content) {
       ?> <p><?php echo $content  ?></p> <?php
    }

    ?>
</body>
</html>