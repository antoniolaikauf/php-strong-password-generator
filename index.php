<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passworld generator</title>
</head>

<body>
    <!-- form per richiedere la lunghezza della password -->
    <form>
        <label for="lughezzaPassword">scrivere il numero dei caratteri che si vuole per la password</label>
        <input type="text" name="lughezzaPassword">
        <input type="submit" value="ricevi">
    </form>

    <?php

    $caratteriMaiuscoli = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $caratteriMinuscoli = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $numeri = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',];
    $caratteriSpeciali = ['!', '@', '#', '$', '^', '&', '*', '_', ':', ';',];
   

    $arrytot = array_merge($caratteriMaiuscoli, $caratteriMinuscoli, $caratteriSpeciali, $numeri);

    var_dump($arrytot)

    ?>
</body>

</html>