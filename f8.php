<?php

function esPalindromo($palabra) {
    return $palabra == strrev($palabra);
}
echo "¿La palabra 'radar' es un palíndromo? " . (esPalindromo("radar") ? "Sí" : "No") . "<br>";

?>