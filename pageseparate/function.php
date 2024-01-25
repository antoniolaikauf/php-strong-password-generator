<?php
// funzione per ricerca 
// $array array con dentro tutti i caratteri 
//$arrayrisp array di risposta per utente 
// $lenghtpassword lunghezza password decisa da utente
function generatePassword($array, $arrayrisp, $lenghtpassword)
{
    // $a = 0;
    // ciclo infinito attenzione 
    while (count($arrayrisp) < $lenghtpassword) {
        // generazione del numero 
        $randomNumber = rand(0, count($array) - 1);
        // controllo se il valore non è presente gia nell'array
        if (!in_array($array[$randomNumber], $arrayrisp)) {
            $arrayrisp[] = $array[$randomNumber];
        }
        // controllo 
        if (count($arrayrisp) == $lenghtpassword) {
            break;
        }
    }
    return (implode('', $arrayrisp));
}
