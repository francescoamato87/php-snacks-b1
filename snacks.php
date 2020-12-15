<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>

<body>
    <!-- DESCRIZIONE:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <?php

    // ?name=francesco&email=francescoamato@gmail.com&age=33

    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $character_length = 3;

    ?>

    <!-- 1. name sia più lungo di 3 caratteri -->


<h1>
<?php
        

if (empty($name)) {
    echo 'Nessun nome';
} elseif (strlen($name) > $character_length) {
    echo 'Nome corretto!';
} else {
    echo 'Il nome deve avere più di tre caratteri';
}

 ?>
</h1>


<!-- 2. che mail contenga un punto e una chiocciola -->

<h1>
    <?php 

    if (empty($email)) {
        echo 'Nessun Email';
    } elseif (strpos($email, '.')) {
        if (strpos($email, '@')) {
            echo 'l\'Email è corretta!';
        } else {
            echo 'Manca la @';
        }
    } else {
        echo 'Manca il punto';
    }

    ?>
</h1>

<!-- 3. e che age sia un numero. -->

<h1>
    <?php 
   
   if (empty($age)) {
        echo 'Nessuna Età';
    } elseif (is_numeric($age)) {
        echo 'Età corretta!';
    } else {
        echo 'Errore, inserire un numero';
    }
        
    ?>
</h1>




</body>

</html>