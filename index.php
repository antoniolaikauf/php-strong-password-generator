<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>passworld generator</title>

    <?php

    require_once __DIR__ . "/pageseparate/function.php";

    ?>
</head>

<body>
    <?php

    $lunghezzaPassword = $_GET['lughezzaPassword'];

    // array con dove ci sarà la risposta 
    $arrayrisposta = [];
    // vari array con i caratteri
    $caratteriMaiuscoli = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $caratteriMinuscoli = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $numeri = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',];
    $caratteriSpeciali = ['!', '@', '#', '$', '^', '&', '*', '_', ':', ';',];

    // somma di tutti gli array
    $arrytot = array_merge($caratteriMaiuscoli, $caratteriMinuscoli, $caratteriSpeciali, $numeri);


    // funzione per generare la password
    ?>

    <!-- form per richiedere la lunghezza della password -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <label for="lughezzaPassword">scrivere il numero dei caratteri che si vuole per la password</label>
                    <input type="text" name="lughezzaPassword" placeholder="scrivi lunghezza password" id="lughezzaPassword">
                    <input type="submit" value="ricevi">
                </form>
            </div>
            <div class="col-12">
                <div>
                    <?php
                    // controllo variabile lunghezzapassword
                    if (!$lunghezzaPassword == 0 || !$lunghezzaPassword == '') {

                    ?>
                        <div class="bg-success text-center fs-3">
                            la tua password è : <?php echo  generatePassword($arrytot, $arrayrisposta, $lunghezzaPassword); ?>
                        </div>
                    <?php  } ?>
                    <?php
                    // controllo variabile lunghezzapassword
                    if ($lunghezzaPassword == 0 || $lunghezzaPassword == '') {

                    ?>
                        <div class="bg-danger text-center fs-3">
                            scrivi un numero all'interno dell'input
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>