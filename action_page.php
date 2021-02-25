<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola cambiata</title>

</head>
<body>
    
    <p style="font-weight: bold;">Frase inserita: 
        <span style="font-weight: normal;">

            <?php
                $frase = $_GET['frase'];
                echo $frase; 
            ?>

        </span>
    </p>

    <p style="font-weight: bold;">Lunghezza della frase: 
        <span style="font-weight: normal;">

            <?php
                echo strlen($_GET['frase']);
            ?>

        </span>
    </p>

    <p style="font-weight: bold;">Parola censurare: 
        <span style="font-weight: normal;">

            <?php
                echo $_GET['badWords'];
            ?>

        </span>
    </p>

    <p style="font-weight: bold;">Frase modificata: 
        <span style="font-weight: normal;">

            <?php
                // echo str_replace ( strtolower($_GET['badWords'), strtolower($_GET['frase']),"*
                echo str_replace(strtolower ($_GET['badWords']),"***", strtolower ($_GET['frase']));
            ?>

        </span>
    </p>

    <a href="/index.php">Indietro</a>

</body>
</html>