<!-- Snack 2
Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. 
Il form avrà un input di testo in cui inserire il nome di un invitato. 
Inseriamo nell’altro file una lista di invitati. 
Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. -->

<?php

include "list.php";

$areYouIn = "";

foreach ($invitati as $key => $value) {
    $yourName = $_GET["invitato"];
    if (in_array($yourName, $invitati)) {
        $areYouIn = "Ok";
    } else {
        $areYouIn = "Ko";
    }
    
}
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
    <form action="" method="get">
    <input type="text" name="invitato" id="invitato" placeholder="come ti chiami?"><button type="submit" class="btn btn-primary">Invia</button>
    </form>
    <h2><?php echo $areYouIn ?></h2>
</body>
</html>