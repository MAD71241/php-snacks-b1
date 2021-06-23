<?php
/* Snack 2
Passare come parametri GET name, mail e age 
verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri
- mail contenga un punto e una chiocciola 
- age sia un numero. 
Se tutto è ok stampare “Accesso riuscito” 
altrimenti “Accesso negato” */

$nameLength = strlen($_GET["name"]);
$checkerDot = strpos($_GET["email"], ".");
$checkerAt = strpos($_GET["email"], "@");
$thisAge = intval($_GET["age"]);
$is_access = "";

if (isset($nameLength) && isset($checkerDot) && isset($thisAge) && isset($checkerAt)) {
    if (strlen($_GET["name"]) > 3 && !$checkerDot === false && !$checkerAt === false && is_int($thisAge)) {
    $is_access = "access granted";
} else {
    $is_access = "access denied";
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

        <input type="email" name="email" id="" placeholder="type your email here" >
        <br>
        <input type="text" name="name" id=""placeholder="type your name here">
        <br>
        <input type="number" name="age" id=""placeholder="type your age here">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    <h2> <?php echo $is_access ?> </h2>
</body>

</html>