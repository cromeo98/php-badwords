<!-- 
    1 Creare una variabile con un paragrafo di testo a vostra scelta. V
    2 Stampare a schermo il paragrafo e la sua lunghezza. V
    3 Una parola da censurare viene passata dall'utente tramite parametro GET. 
    4 Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php

$my_string = 'I topi non avevano nipoti';

$bad_word = ($_GET['badWord']);

$censored_string = str_replace($bad_word, '***', $my_string);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad word exercise</title>
</head>
<body>
    
    <p>
        <?php echo $my_string?>
    </p>
    <p>
        La lunghezza della stringa è: <?php echo strlen($my_string)?>
    </p>
    <p>
        <?php echo $censored_string?>
    </p>
    <p>
        La lunghezza della stringa censurata è: <?php echo strlen($censored_string)?>
    </p>

</body>
</html>