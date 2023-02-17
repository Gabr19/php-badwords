<?php
    $text ="Applausi per Fibra, Fibra, Fibra, Fibra, Fibra
    Applausi, applausi
    Applausi per Fibra, Fibra, Fibra, Fibra, Fibra
    Applausi, applausi
    Applausi per Fibra, Fibra, Fibra, Fibra, Fibra
    Applausi, applausi
    Applausi per Fibra, Fibra, Fibra, Fibra, Fibra
    Applausi, applausi, applausi per";
    $changeWord = $_GET['word'];
    $paragrafoModificato = str_replace($changeWord, '***' , $text);
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
    <h1> <?php echo $text?></h1>
    <p><?php echo strlen($text)?></p>

    <p>la parola da sostituire è: <?php echo $changeWord;?></p>
    <h1><?php echo $paragrafoModificato;?></h1>
    <p><?php echo strlen($paragrafoModificato)?></p>




    <form>
        <input type="text" name="word" placeholder="parola da sostituire">
        <button>
            invio
        </button>
    </form>
    
</body>
</html>