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

foreach ($db as $key => $value) {
    if ($key == "teachers") {
        $teachers = $value;
    } else {
        $pm = $value;
    }
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers & PMs</title>
</head>
<body>

<?php for ($i=0; $i < count($teachers) ; $i++) {?> 
        <div class="grey" style="
    width: 200px;
    height: 200px;
    text-align: center;
    line-height: 200px;
    background: grey;
    font-weight: bold;
    text-transform: uppercase;
    color: white;
    margin-left: 10px;
    margin-bottom: 10px;
    display: inline-block;"> <?php echo $teachers[$i]["name"] ." " .$teachers[$i]["lastname"]; ?></div>
        <?php
    }
?>
<br>
<?php for ($i=0; $i < count($pm) ; $i++) {?> 
        <div class="green" style="
    width: 200px;
    height: 200px;
    text-align: center;
    line-height: 200px;
    background: green;
    font-weight: bold;
    text-transform: uppercase;
    color: white;
    margin-left: 10px;
    display: inline-block;"> <?php echo $pm[$i]["name"] ." " .$pm[$i]["lastname"]; ?></div>
        <?php
    }
?>
</body>
</html>